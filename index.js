window.addEventListener("scroll", function() {
    let header = document.querySelector(".fixed");

    if (window.scrollY > 0) {
        header.style.position = "fixed";
        header.style.top = "0";
        header.style.width = "100%";
        header.style.zIndex = "1000";
    } else {
        header.style.position = "relative";
    }
});

// search

function filterCards(category) {
    let cards = document.querySelectorAll('.card2');
    cards.forEach(card => {
        if (card.getAttribute('data-category') === category || category === 'All') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function() {
    let filter = this.value.toLowerCase();
    let cards = document.querySelectorAll('.card2');
    cards.forEach(card => {
        let title = card.querySelector('h3').textContent.toLowerCase();
        if (title.includes(filter)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// tab

function showTab(index) {
    let tabs = document.querySelectorAll(".tab");
    let contents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => tab.classList.remove("active"));
    contents.forEach(content => content.classList.remove("active"));

    tabs[index].classList.add("active");
    contents[index].classList.add("active");
}
// siderbar

document.addEventListener("DOMContentLoaded", function() {
    let searchBox = document.querySelector(".search-bar1");
    let aiFilter = document.getElementById("ai-filter");
    let productFilter = document.getElementById("product-filter");
    let assetFilter = document.getElementById("asset-filter");
    let cards = document.querySelectorAll(".card-1");

    function filterCards() {
        let searchText = searchBox.value.toLowerCase();
        let aiChecked = aiFilter.checked;
        let productChecked = productFilter.checked;
        let assetChecked = assetFilter.checked;

        cards.forEach(card => {
            let title = card.querySelector("h3").innerText.toLowerCase();
            let matchesSearch = title.includes(searchText);
            let matchesCategory = (aiChecked && card.dataset.category === "ai");

            if (matchesSearch && matchesCategory) {
                card.classList.remove("hidden");
            } else {
                card.classList.add("hidden");
            }
        });
    }

    searchBox.addEventListener("input", filterCards);
    aiFilter.addEventListener("change", filterCards);
    productFilter.addEventListener("change", filterCards);
    assetFilter.addEventListener("change", filterCards);
});

// add tab

// function copyCode() {
//     const code = document.querySelector(".code-block pre").innerText;
//     navigator.clipboard.writeText(code);
//     alert("Code copied to clipboard!");
// }

// function copyCode() {
//     const code = document.querySelector(".code-block pre").innerText;
//     navigator.clipboard.writeText(code);
//     alert("Code copied to clipboard!");
// }



// iframe css is here with all seciton

document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".anc-tab");
    const contents = document.querySelectorAll(".anc-tab-content");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function() {
            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove("anc-active"));
            contents.forEach(c => c.classList.remove("anc-active"));

            // Add active class to the clicked tab and corresponding content
            tab.classList.add("anc-active");
            contents[index].classList.add("anc-active");
        });
    });
});




function openTab(index) {
    const tabs = document.querySelectorAll(".anc-tab");
    const contents = document.querySelectorAll(".anc-tab-content");

    tabs.forEach(tab => tab.classList.remove("anc-active"));
    contents.forEach(content => content.classList.remove("anc-active"));

    tabs[index].classList.add("anc-active");
    contents[index].classList.add("anc-active");
}
tab

function showContent(index) {
    let contents = document.querySelectorAll(".tab-content");

    contents.forEach((content, i) => {
        content.classList.remove("active");
        if (i === index) {
            content.classList.add("active");
        }
    });
}


// new

// Function to change tabs
function changeTab(tabId) {
    // Remove active class from all menu items
    document.querySelectorAll('.menu-item').forEach(tab => {
        tab.classList.remove('menu-active');
    });

    // Hide all content
    document.querySelectorAll('.content-box').forEach(content => {
        content.classList.remove('content-active');
    });

    // Activate the selected tab
    document.querySelector(`[onclick="changeTab('${tabId}')"]`).classList.add('menu-active');

    // Show the corresponding content
    document.getElementById(tabId).classList.add('content-active');
}


// ---------------------about-------------------


function openAbout() {
    document.getElementById("ab-aboutPanel").classList.add("ab-active");
}

function closeAbout() {
    document.getElementById("ab-aboutPanel").classList.remove("ab-active");
}