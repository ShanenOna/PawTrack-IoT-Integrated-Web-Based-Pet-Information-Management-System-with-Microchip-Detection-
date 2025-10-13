//------------------------------------------------------SHANEN--------------------------------------------------------------------
// Navigate to pet details page
function goToPetDetails(petId) {
    // Store pet ID for reference
    sessionStorage.setItem('currentPetId', petId);
    window.location.href = 'pets.html';
}

// Go back to dashboard
function goBack() {
    window.location.href = 'dashboard.html';
}

// Tab switching functionality
function showTab(tabName) {
    // Hide all tabs
    const tabs = document.querySelectorAll('.tab-pane');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    // Remove active class from all menu items
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        item.classList.remove('active');
    });

    // Show selected tab
    const selectedTab = document.getElementById(tabName + '-tab');
    if (selectedTab) {
        selectedTab.classList.add('active');
    }

    // Add active class to clicked menu item
    event.target.classList.add('active');
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the pets page
    if (window.location.pathname.includes('pets.html')) {
        const petId = sessionStorage.getItem('currentPetId');
        console.log('Current pet ID:', petId);
        // You can load specific pet data based on petId here
    }

    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Microchip scanner input validation
    const microchipInput = document.querySelector('.microchip-input');
    if (microchipInput) {
        microchipInput.addEventListener('input', function(e) {
            // Only allow numbers
            this.value = this.value.replace(/[^0-9]/g, '');
            
            // Limit to 17 digits
            if (this.value.length > 17) {
                this.value = this.value.slice(0, 17);
            }
        });
    }

    // Add button functionality
    const addBtn = document.querySelector('.add-btn');
    if (addBtn) {
        addBtn.addEventListener('click', function() {
            const input = document.querySelector('.microchip-input');
            if (input && input.value.length === 15 || input.value.length === 17) {
                alert('Microchip number added: ' + input.value);
                // Here you would typically send this to a backend
                input.value = '';
            } else {
                alert('Please enter a valid microchip number (15 or 17 digits)');
            }
        });
    }

    // Add expand button functionality
    const expandBtn = document.querySelector('.expand-btn');
    if (expandBtn) {
        expandBtn.addEventListener('click', function() {
            alert('Expand functionality - Add new pet');
            // This would open a modal or form to add a new pet
        });
    }

    // Add microchip button functionality
    const addMicrochipBtn = document.querySelector('.add-microchip-btn');
    if (addMicrochipBtn) {
        addMicrochipBtn.addEventListener('click', function() {
            alert('Add/Edit microchip number functionality');
            // This would open a modal or form to edit microchip
        });
    }
});
//------------------------------------------------------SHANEN--------------------------------------------------------------------