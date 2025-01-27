

var currentSelection = 'Episodes'; // Initially set the button text to 'Episodes'

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function glowButton(){
    const glowButton = document.getElementById("dropdownButton");
    glowButton.classList.add("glowinganim");
    setTimeout(function()
    {
        glowButton.classList.remove("glowinganim")
    }, 5000);
}

function filterFunction() {
    var input, filter, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.tab-link');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const tabName = this.getAttribute('data-tab');
            changeTab(tabName);
        });
    });
});

function changeTab(selectedValue) {
    var tabContent = document.getElementsByClassName("tabcontent");

    for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    document.getElementById(selectedValue).style.display = "block";
    document.getElementById("myDropdown").classList.remove("show");

    currentSelection = selectedValue;
    document.getElementById("dropdownButton").textContent = currentSelection;
}

function toggleElement(elementId) {
    const element = document.getElementById(elementId);

    if (element.offsetHeight === 0) {
        element.style.height = element.scrollHeight + "px";
    } else {
        element.style.height = 0;
    }
}