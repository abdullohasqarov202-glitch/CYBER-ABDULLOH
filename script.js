const glow=document.querySelector('.cursor-glow');
window.addEventListener('pointermove',e=>{glow.style.left=e.clientX+'px';glow.style.top=e.clientY+'px'});
const observer=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('visible')}),{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));
document.querySelector('.menu').addEventListener('click',()=>{
  const nav=document.querySelector('nav');
  nav.style.display=nav.style.display==='flex'?'none':'flex';
  nav.style.position='absolute';nav.style.top='72px';nav.style.left='0';nav.style.right='0';
  nav.style.background='#080808';nav.style.padding='25px';nav.style.flexDirection='column';
});
