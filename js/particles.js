function App() {
  const { Renderer, Camera, Geometry, Program, Mesh, Vec2, Vec3, Color, GPGPU } = ogl;

  let renderer, gl, camera;
  let time, mouse, color1, color2;
  let points, positionB, velocityB;

  init();

  function init() {
    renderer = new Renderer({ dpr: 2 });
    gl = renderer.gl;
    document.querySelector('#portfolio-hero').appendChild(gl.canvas);

    camera = new Camera(gl, { fov: 45 });
    camera.position.set(0, 0, 5);

    resize();
    window.addEventListener('resize', resize, false);
    function resize() {
      renderer.setSize(window.innerWidth, window.innerHeight);
      camera.perspective({ aspect: gl.canvas.width / gl.canvas.height });
    }

    initScene();
    initEventsListener();
    requestAnimationFrame(animate);
  }

  function initScene() {
    gl.clearColor(0, 0, 0, 0);

    time = { value: 0 };
    mouse = { value: new Vec2() };

    const numParticles = 262144;
    const positions = new Float32Array(numParticles * 4);
    const velocities = new Float32Array(numParticles * 4);
    const v = new Vec3(), v1 = new Vec3();
    for (let i = 0; i < numParticles; i++) {
      v.set(rnd(-1, 1), rnd(-1, 1), rnd(-1, 1));
      positions.set([v.x, v.y, v.z, 1], i * 4);
      // velocities.set([0, 0, 0, 1], i * 4);

      // v.multiply(1.5);
      const a = Math.PI / 30, cs = Math.cos(a), sn = Math.sin(a);
      const rx = v.x * cs - v.y * sn;
      const ry = v.x * sn + v.y * cs;
      v1.set(rx, ry, v.z).sub(v).normalize().multiply(1.5);
      velocities.set([v1.x, v1.y, v1.z, 1], i * 4);
    }

    positionB = new GPGPU(gl, { data: positions });
    velocityB = new GPGPU(gl, { data: velocities });

    positionB.addPass({
      fragment: `
        precision highp float;

        uniform float uTime;
        uniform sampler2D tVelocity;
        uniform sampler2D tMap;

        varying vec2 vUv;

        void main() {
          vec4 position = texture2D(tMap, vUv);
          vec4 velocity = texture2D(tVelocity, vUv);
          position.xyz += velocity.xyz * 0.01;
          gl_FragColor = position;
        }
      `,
      uniforms: {
        uTime: time,
        tVelocity: velocityB.uniform
      }
    });

    velocityB.addPass({
      fragment: `
        precision highp float;

        uniform float uTime;
        uniform sampler2D tPosition;
        uniform sampler2D tMap;
        uniform vec2 uMouse;

        varying vec2 vUv;

        void main() {
          vec4 position = texture2D(tPosition, vUv);
          vec4 velocity = texture2D(tMap, vUv);
          // vec3 toMouse = vec3(uMouse, 0.0) - position.xyz;
          vec3 toMouse = vec3(uMouse, sin(uTime)*0.1) - position.xyz;
          velocity.xyz += normalize(toMouse) * 0.04;
          velocity.xyz = clamp(velocity.xyz, vec3(-1.5), vec3(1.5));
          gl_FragColor = velocity;
          gl_FragColor.a = length(velocity.xyz);
        }
      `,
      uniforms: {
        uTime: time,
        uMouse: mouse,
        tPosition: positionB.uniform
      }
    });

    const geometry = new Geometry(gl, {
      coords: { size: 2, data: positionB.coords }
    });

    color1 = { value: new Color('#00D8FF') };
    color2 = { value: new Color('#9A108F') };

    const program = new Program(gl, {
      transparent: true,
      vertex: `
        precision highp float;

        attribute vec2 coords;

        uniform float uTime;
        uniform sampler2D tPosition;
        uniform sampler2D tVelocity;

        varying vec4 vVelocity;

        void main() {
          vec4 position = texture2D(tPosition, coords);
          vVelocity = texture2D(tVelocity, coords);
          gl_Position = vec4(position.xyz, 1.0);
          gl_PointSize = clamp(0.5, 4.0, 4.0 - vVelocity.a * 0.5);
        }
      `,
      fragment: `
        precision highp float;

        uniform vec3 uColor1;
        uniform vec3 uColor2;

        varying vec4 vRandom;
        varying vec4 vVelocity;

        void main() {
          float pct = smoothstep(0.3, 3.0, vVelocity.a);
          gl_FragColor = mix(vec4(uColor1, 0.0), vec4(uColor2, 1.0), pct);
        }
      `,
      uniforms: {
        uTime: time,
        tPosition: positionB.uniform,
        tVelocity: velocityB.uniform,
        uColor1: color1,
        uColor2: color2
      }
    });

    points = new Mesh(gl, { geometry, program, mode: gl.POINTS });
  }

  function animate(t) {
    requestAnimationFrame(animate);

    time.value = t;
    velocityB.render();
    positionB.render();
    renderer.render({ scene: points, camera });
  }

  function initEventsListener() {
    if ('ontouchstart' in window) {
      gl.canvas.addEventListener('touchstart', updateMouse, false);
      gl.canvas.addEventListener('touchmove', updateMouse, false);
      gl.canvas.addEventListener('touchend', updateColors, false);
    } else {
      gl.canvas.addEventListener('mousemove', updateMouse, false);
      gl.canvas.addEventListener('mouseup', updateColors, false);
    }

    function updateColors() {
      color1.value.set(chroma.random().hex());
      color2.value.set(chroma.random().hex());
      // if (rnd() > 0.5) gl.clearColor(1, 1, 1, 1)
      // else gl.clearColor(0, 0, 0, 1)
    }

    function updateMouse(e) {
      if (e.changedTouches && e.changedTouches.length) {
        e.x = e.changedTouches[0].pageX;
        e.y = e.changedTouches[0].pageY;
      }
      if (e.x === undefined) {
        e.x = e.pageX;
        e.y = e.pageY;
      }
      mouse.value.set(
        (e.x / gl.renderer.width) * 2 - 1,
        (1.0 - e.y / gl.renderer.height) * 2 - 1
      );
    }
  }

  function rnd(min, max) {
    if (min === undefined) { min = 1; }
    if (max === undefined) { max = min; min = 0; }
    return Math.random() * (max - min) + min;
  }
}

App();
