/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let url = window.location.href;
const catLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
catLink.forEach((item) => {
  if (item.href === url) {
    item.classList.add("active");
  }
});



// wrapping product category title and category link to a new div 

let catWrapper = document.querySelectorAll('.wc-block-featured-category__wrapper');

if (catWrapper !== null) {

  catWrapper.forEach((item) => {
    let btnWrap = document.createElement('div');
    btnWrap.classList.add('btn-wrap');
    item.appendChild(btnWrap);
    let catTitle = item.querySelectorAll('.wc-block-featured-category__title');
    catTitle.forEach((link) => {
      btnWrap.appendChild(link);
    })
    let catLink = item.querySelectorAll('.wc-block-featured-category__link');
    catLink.forEach((link) => {
      btnWrap.appendChild(link);
    })


  });
}