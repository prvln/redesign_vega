const windowInnerWidth = document.documentElement.clientWidth;

function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
     change.target.classList.add('element-show');
    }
  });
}

window.addEventListener("resize", function() {
  if (document.documentElement.clientWidth > 992) {

  let options = {
    threshold: [0.2] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.element-animation');
  
  for (let elm of elements) {
    observer.observe(elm);
  }
}
})

if (windowInnerWidth > 992){
    let options = {
      threshold: [0.2] };
    let observer = new IntersectionObserver(onEntry, options);
    let elements = document.querySelectorAll('.element-animation');
    
    for (let elm of elements) {
      observer.observe(elm);
    }
  }