
// Function to show all rows
function showAll(className) {
    const tables = document.querySelectorAll(`.${className}`);
    tables.forEach(table => {
        const rows = table.querySelectorAll("tbody tr");
        rows.forEach(row => {
            row.style.display = "";
        });
    });
    localStorage.setItem(`tableState_${className}`, 'all');
}

// Function to show only caught rows
function showCaught(className) {
    const tables = document.querySelectorAll(`.${className}`);
    tables.forEach(table => {
        const rows = table.querySelectorAll("tbody tr");
        rows.forEach(row => {
            if (row.classList.contains("succenc")) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
    localStorage.setItem(`tableState_${className}`, 'caught');
}

// Function to set table visibility based on saved state
function setTableVisibility(className) {
    const tableState = localStorage.getItem(`tableState_${className}`);
    if (tableState === 'caught') {
        showCaught(className);
    } else {
        showAll(className);
    }
}

document.getElementById("showAll0").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught0").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll1").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught1").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll3").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught3").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll4").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught4").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll5").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught5").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll7").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught7").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll10").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught10").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll11").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught11").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll12").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught12").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll15").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught15").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll16").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught16").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll17").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught17").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll18").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught18").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll21").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught21").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll25").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught25").addEventListener("click", () => showCaught("pokemon-table"));

document.getElementById("showAll27").addEventListener("click", () => showAll("pokemon-table"));
document.getElementById("showCaught27").addEventListener("click", () => showCaught("pokemon-table"));

document.addEventListener('DOMContentLoaded', () => {
    setTableVisibility("pokemon-table");
});