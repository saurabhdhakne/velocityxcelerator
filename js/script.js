// document.addEventListener('DOMContentLoaded', () => {
//   setTimeout(() => {
//     document.getElementById('loader').style =
//       'height:0px; margin-top:50vh;'
//   }, 3000)
// })

function openNav(){document.getElementById("mySidenav").style.width="80%";}
function closeNav(){document.getElementById("mySidenav").style.width="0";}

$(function(){
  var header=$("#navbar");
  $(window).scroll(function(){var scroll=$(window).scrollTop();
    if(scroll>=40){
      header.addClass('position-fixed navbar-fix');
    }else{
      header.removeClass('position-fixed navbar-fix');
    }
  });
});

function myFunction(str) {
  var copyText = 'https://velocityxcelerator/blog?id='+str;
  navigator.clipboard.writeText(copyText);
  alert("Copied the text: " + copyText);
}