let clientX=-100,clientY=-100;const innerCursor=document.querySelector(".cursor--small"),initCursor=()=>{document.addEventListener("mousemove",(t=>{clientX=t.clientX,clientY=t.clientY}));const t=()=>{innerCursor.style.transform=`translate(${clientX}px, ${clientY}px)`,requestAnimationFrame(t)};requestAnimationFrame(t)};initCursor();let group,stuckX,stuckY,fillOuterCursor,lastX=0,lastY=0,isStuck=!1,showCursor=!1;const initCanvas=()=>{const t=document.querySelector(".cursor--canvas"),e=75;paper.setup(t);let s=!1;const n=new paper.Path.RegularPolygon(new paper.Point(0,0),15,100);n.strokeColor="rgba(0, 0, 0, 1)",n.smooth(),group=new paper.Group([n]),group.applyMatrix=!1;const o=n.segments.map((()=>new SimplexNoise));let r=[];const c=(t,e,s)=>(1-s)*t+s*e,i=(t,e,s,n,o)=>(t-e)*(o-n)/(s-e)+n;paper.view.onFrame=t=>{if(isStuck?isStuck&&(lastX=c(lastX,stuckX,.2),lastY=c(lastY,stuckY,.2),group.position=new paper.Point(lastX,lastY)):(lastX=c(lastX,clientX,.2),lastY=c(lastY,clientY,.2),group.position=new paper.Point(lastX,lastY)),isStuck&&n.bounds.width<e)n.scale(1.08);else if(!isStuck&&n.bounds.width>30){s&&(n.segments.forEach(((t,e)=>{t.point.set(r[e][0],r[e][1])})),s=!1,r=[]);const t=.92;n.scale(t)}isStuck&&n.bounds.width>=e&&(s=!0,0===r.length&&n.segments.forEach(((t,e)=>{r[e]=[t.point.x,t.point.y]})),n.segments.forEach(((e,s)=>{const n=o[s].noise2D(t.count/100,0),c=o[s].noise2D(t.count/100,1),a=i(n,-1,1,-4,4),l=i(c,-1,1,-4,4),u=r[s][0]+a,d=r[s][1]+l;e.point.set(u,d)}))),n.smooth()}};initCanvas();const initHovers=()=>{const t=t=>{const e=t.currentTarget.getBoundingClientRect();stuckX=Math.round(e.left+e.width/10),stuckY=Math.round(e.top+e.height/2),isStuck=!0},e=t=>{const e=t.currentTarget.getBoundingClientRect();stuckX=Math.round(e.left+e.width/2),stuckY=Math.round(e.top+e.height/2),isStuck=!0},s=()=>{isStuck=!1},n=()=>{isStuck=!1};document.querySelectorAll(".link").forEach((e=>{e.addEventListener("mouseenter",t),e.addEventListener("mouseleave",s)}));document.querySelectorAll(".ham").forEach((t=>{t.addEventListener("mouseenter",e),t.addEventListener("mouseleave",n)}))};initHovers(),function(t){t((function(){t("#slide").hover((function(){t(".cursor--small").addClass("drag")}),(function(){t(".cursor--small").removeClass("drag")}))})),t((function(){t(".accordeon").hover((function(){t(".cursor--small").addClass("click")}),(function(){t(".cursor--small").removeClass("click")}))})),t((function(){t(".item").hover((function(){t(".cursor--small").addClass("click")}),(function(){t(".cursor--small").removeClass("click")}))}))}(jQuery);