let intervalId=0;const $scrollButton=document.querySelector(".scroll");function scrollStep(){0===window.pageYOffset&&clearInterval(intervalId),window.scroll(0,window.pageYOffset-50)}function scrollToTop(){intervalId=setInterval(scrollStep,16.66)}$scrollButton.addEventListener("click",scrollToTop);