const screenSize = window.matchMedia("(max-width: 700px)");
const screenSize2 = window.matchMedia("(max-width: 1000px)");

function openNav() {
    if (!screenSize2.matches) {
        document.getElementById("mySidebar").style.width = "500px";
        document.getElementById("main").style.marginLeft = "230px";
    } else if (!screenSize.matches) { // screen size is greater than 700px
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginRight = "0px";
    } else { // screen size is 700px or less
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("main").style.marginRight = "0px";
    }
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    if (!screenSize2.matches) {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.margin = "0px";
    } else if (!screenSize.matches) { // screen size is greater than 700px
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.margin = "0px";
    } else { // screen size is 700px or less
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.margin = "0";
    }

}

document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('.tab-link');
  links.forEach(function(link) {
      link.addEventListener('click', function(event) {
          event.preventDefault();
          const tabName = this.getAttribute('data-tab');
          changeTab(tabName);
          document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
      });
  });
});

function changeTab(selectedValue) {
  var tabContent = document.getElementsByClassName("tabcontent");

  for (var i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
  }

  document.getElementById(selectedValue).style.display = "block";

  currentSelection = selectedValue;
}



function toggleElement(elementId) {
  const element = document.getElementById(elementId);

  if (element.offsetHeight === 0) {
      element.style.height = element.scrollHeight + "px";
  } else {
      element.style.height = 0;
  }
}

