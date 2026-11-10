/**
 * Metrics Mart Infoline Pvt Ltd - Interactive Frontend JavaScript
 * Handles Navigation, Mega-Menu, Mobile Drawer, FAQ Accordions,
 * Form Validation, and Scroll Interactions.
 */

document.addEventListener("DOMContentLoaded", () => {
    // --- 1. Sticky Header on Scroll ---
    const siteHeader = document.getElementById("siteHeader");
    const backToTopBtn = document.getElementById("backToTopBtn");

    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        // Sticky header class
        if (siteHeader) {
            if (scrollY > 40) {
                siteHeader.classList.add("scrolled");
            } else {
                siteHeader.classList.remove("scrolled");
            }
        }

        // Back to top visibility
        if (backToTopBtn) {
            if (scrollY > 350) {
                backToTopBtn.classList.add("is-visible");
            } else {
                backToTopBtn.classList.remove("is-visible");
            }
        }
    });

    if (backToTopBtn) {
        backToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    // --- 2. Mobile Drawer Navigation ---
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const drawerCloseBtn = document.getElementById("drawerCloseBtn");
    const mobileDrawer = document.getElementById("mobileDrawer");
    const drawerOverlay = document.getElementById("drawerOverlay");

    function resetMobileServicesCategories() {
        const mobileCatBtns = document.querySelectorAll(".mobile-cat-btn");
        mobileCatBtns.forEach(btn => {
            btn.classList.remove("is-active");
            btn.setAttribute("aria-expanded", "false");
            const targetId = btn.getAttribute("aria-controls");
            const targetSubtopics = document.getElementById(targetId);
            if (targetSubtopics) {
                targetSubtopics.classList.remove("is-open");
                targetSubtopics.hidden = true;
            }
        });
    }

    function openMobileDrawer() {
        if (mobileDrawer && drawerOverlay) {
            mobileDrawer.classList.add("is-open");
            mobileDrawer.setAttribute("aria-hidden", "false");
            drawerOverlay.classList.add("is-active");
            if (mobileMenuBtn) {
                mobileMenuBtn.setAttribute("aria-expanded", "true");
            }
            document.body.style.overflow = "hidden"; // Prevent body scroll
        }
    }

    function closeMobileDrawer() {
        if (mobileDrawer && drawerOverlay) {
            mobileDrawer.classList.remove("is-open");
            mobileDrawer.setAttribute("aria-hidden", "true");
            drawerOverlay.classList.remove("is-active");
            if (mobileMenuBtn) {
                mobileMenuBtn.setAttribute("aria-expanded", "false");
            }
            document.body.style.overflow = ""; // Restore body scroll
            resetMobileServicesCategories();
        }
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            openMobileDrawer();
        });
    }

    if (drawerCloseBtn) {
        drawerCloseBtn.addEventListener("click", closeMobileDrawer);
    }

    if (drawerOverlay) {
        drawerOverlay.addEventListener("click", closeMobileDrawer);
    }

    // Mobile Drawer Accordion Submenus
    const mobileAccordions = document.querySelectorAll(".mobile-accordion");
    mobileAccordions.forEach((accordion) => {
        const toggle = accordion.querySelector(".mobile-accordion-toggle");
        if (toggle) {
            toggle.addEventListener("click", () => {
                const isOpen = accordion.classList.contains("is-open");
                // Close other accordions
                mobileAccordions.forEach((other) => {
                    if (other !== accordion) {
                        other.classList.remove("is-open");
                    }
                });
                accordion.classList.toggle("is-open", !isOpen);
                // When Services accordion is collapsed, reset category subtopics
                if (isOpen) {
                    resetMobileServicesCategories();
                }
            });
        }
    });

    // Mobile Services Category Dropdowns
    const mobileCatBtns = document.querySelectorAll(".mobile-cat-btn");
    mobileCatBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const isOpen = btn.classList.contains("is-active");
            const targetId = btn.getAttribute("aria-controls");
            const targetSubtopics = document.getElementById(targetId);

            // Close other mobile category subtopics so only one is displayed
            mobileCatBtns.forEach((otherBtn) => {
                if (otherBtn !== btn) {
                    otherBtn.classList.remove("is-active");
                    otherBtn.setAttribute("aria-expanded", "false");
                    const otherTargetId = otherBtn.getAttribute("aria-controls");
                    const otherSubtopics = document.getElementById(otherTargetId);
                    if (otherSubtopics) {
                        otherSubtopics.classList.remove("is-open");
                        otherSubtopics.hidden = true;
                    }
                }
            });

            // Toggle current category
            if (isOpen) {
                btn.classList.remove("is-active");
                btn.setAttribute("aria-expanded", "false");
                if (targetSubtopics) {
                    targetSubtopics.classList.remove("is-open");
                    targetSubtopics.hidden = true;
                }
            } else {
                btn.classList.add("is-active");
                btn.setAttribute("aria-expanded", "true");
                if (targetSubtopics) {
                    targetSubtopics.hidden = false;
                    targetSubtopics.classList.add("is-open");
                }
            }
        });
    });

    // --- Multi-Column Mega-Menus (Services & Technology) ---
    const megaNavItems = document.querySelectorAll(".nav-item.has-mega-menu");

    function resetAllMegaMenus() {
        megaNavItems.forEach((menuContainer) => {
            menuContainer.classList.remove("is-open");
            const toggle = menuContainer.querySelector(".mega-toggle");
            if (toggle) {
                toggle.setAttribute("aria-expanded", "false");
            }
        });
    }

    megaNavItems.forEach((menuContainer) => {
        const megaToggle = menuContainer.querySelector(".mega-toggle");
        let closeTimer = null;

        function openMenu() {
            if (closeTimer) {
                clearTimeout(closeTimer);
                closeTimer = null;
            }

            // Close sibling mega menus to avoid overlaps
            megaNavItems.forEach((other) => {
                if (other !== menuContainer) {
                    other.classList.remove("is-open");
                    const otherToggle = other.querySelector(".mega-toggle");
                    if (otherToggle) {
                        otherToggle.setAttribute("aria-expanded", "false");
                    }
                }
            });

            menuContainer.classList.add("is-open");
            if (megaToggle) {
                megaToggle.setAttribute("aria-expanded", "true");
            }
        }

        function scheduleClose(delay = 200) {
            if (closeTimer) {
                clearTimeout(closeTimer);
            }
            closeTimer = setTimeout(() => {
                closeMenu();
            }, delay);
        }

        function closeMenu() {
            menuContainer.classList.remove("is-open");
            if (megaToggle) {
                megaToggle.setAttribute("aria-expanded", "false");
            }
        }

        // Open on hover (desktop)
        menuContainer.addEventListener("mouseenter", () => {
            openMenu();
        });

        // Close smoothly on mouse leave with debounce to prevent accidental closing/flickering
        menuContainer.addEventListener("mouseleave", () => {
            scheduleClose(200);
        });

        // Keyboard focus management
        menuContainer.addEventListener("focusin", () => {
            openMenu();
        });

        menuContainer.addEventListener("focusout", (e) => {
            if (!menuContainer.contains(e.relatedTarget)) {
                scheduleClose(150);
            }
        });

        // Touch support for tablets/laptops with touchscreens
        if (megaToggle) {
            megaToggle.addEventListener("click", (e) => {
                if (window.matchMedia("(hover: none)").matches) {
                    if (!menuContainer.classList.contains("is-open")) {
                        e.preventDefault();
                        openMenu();
                    }
                }
            });
        }
    });

    // Close on click outside (especially helpful for touchscreen devices)
    document.addEventListener("click", (e) => {
        let insideMega = false;
        megaNavItems.forEach((menuContainer) => {
            if (menuContainer.contains(e.target)) {
                insideMega = true;
            }
        });
        if (!insideMega) {
            resetAllMegaMenus();
        }
    });

    // Close on Escape Key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            closeMobileDrawer();
            resetAllMegaMenus();
        }
    });

    // --- 3. FAQ Accordion ---
    const faqItems = document.querySelectorAll(".faq-item");
    faqItems.forEach((item) => {
        const questionBtn = item.querySelector(".faq-question");
        if (questionBtn) {
            questionBtn.addEventListener("click", () => {
                const isActive = item.classList.contains("is-active");

                // Optional: collapse sibling items
                faqItems.forEach((other) => {
                    if (other !== item) {
                        other.classList.remove("is-active");
                        const icon = other.querySelector(".faq-icon");
                        if (icon) icon.textContent = "+";
                    }
                });

                item.classList.toggle("is-active", !isActive);
                const icon = item.querySelector(".faq-icon");
                if (icon) {
                    icon.textContent = !isActive ? "–" : "+";
                }
            });
        }
    });

    // --- 4. Interactive Form Validation (Lead Generation & Contact Forms) ---
    const forms = document.querySelectorAll("form.validate-form");
    forms.forEach((form) => {
        const feedbackBox = form.querySelector(".form-feedback") || form.parentElement?.querySelector(".form-feedback");

        // Clear error highlighting when the user starts typing
        form.querySelectorAll(".form-control").forEach(input => {
            input.addEventListener("input", () => {
                input.style.borderColor = "";
                if (feedbackBox && feedbackBox.classList.contains("error")) {
                    feedbackBox.style.display = "none";
                }
            });
        });

        form.addEventListener("submit", (e) => {
            let isValid = true;
            const nameInput = form.querySelector("[name='name'], [name='your-name'], [name='full_name']");
            const emailInput = form.querySelector("[name='email'], [name='your-email']");
            const phoneInput = form.querySelector("[name='phone'], [name='your-phone']");
            const messageInput = form.querySelector("[name='message'], [name='your-message']");

            // Reset borders
            form.querySelectorAll(".form-control").forEach(input => {
                input.style.borderColor = "";
            });

            // Name validation
            if (nameInput && nameInput.value.trim().length < 2) {
                isValid = false;
                nameInput.style.borderColor = "#dc3545";
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailInput && (!emailInput.value.trim() || !emailRegex.test(emailInput.value.trim()))) {
                isValid = false;
                emailInput.style.borderColor = "#dc3545";
            }

            // Phone validation (at least 7 digits)
            if (phoneInput && phoneInput.value.replace(/\D/g, '').length < 7) {
                isValid = false;
                phoneInput.style.borderColor = "#dc3545";
            }

            // Message validation (if required)
            if (messageInput && messageInput.hasAttribute("required") && messageInput.value.trim().length < 5) {
                isValid = false;
                messageInput.style.borderColor = "#dc3545";
            }

            if (!isValid) {
                e.preventDefault();
                if (feedbackBox) {
                    feedbackBox.className = "form-feedback error";
                    feedbackBox.innerHTML = "<strong>Error:</strong> Please fill in all required fields (Name, Email, Phone, and Message) with valid details.";
                    feedbackBox.style.display = "block";
                    feedbackBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            }
        });
    });

    // --- 4b. Accessible Custom Service Dropdown for Mobile Viewports ---
    const customDropdown = document.getElementById("customServiceDropdown");
    const nativeSelect = document.getElementById("contactService");

    if (customDropdown && nativeSelect) {
        const trigger = document.getElementById("customDropdownTrigger");
        const label = document.getElementById("customDropdownLabel");
        const listbox = document.getElementById("customServiceListbox");
        const items = Array.from(customDropdown.querySelectorAll(".custom-dropdown-item"));
        const serviceLabel = document.getElementById("contactServiceLabel");

        function openDropdown() {
            customDropdown.classList.add("is-open");
            customDropdown.setAttribute("aria-expanded", "true");
            const selectedItem = customDropdown.querySelector(".custom-dropdown-item.is-selected");
            if (selectedItem) {
                selectedItem.scrollIntoView({ block: "nearest" });
            }
        }

        function closeDropdown() {
            customDropdown.classList.remove("is-open");
            customDropdown.setAttribute("aria-expanded", "false");
        }

        function toggleDropdown(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            if (customDropdown.classList.contains("is-open")) {
                closeDropdown();
            } else {
                openDropdown();
            }
        }

        function selectItem(item) {
            const val = item.getAttribute("data-value");
            const text = item.querySelector(".item-text") ? item.querySelector(".item-text").textContent.trim() : item.textContent.trim();

            // Update underlying native select
            nativeSelect.value = val;
            nativeSelect.dispatchEvent(new Event("change", { bubbles: true }));

            // Update custom dropdown UI state
            if (label) label.textContent = text;
            items.forEach(i => {
                const isMatch = (i === item);
                i.classList.toggle("is-selected", isMatch);
                i.setAttribute("aria-selected", isMatch ? "true" : "false");
            });

            closeDropdown();
            if (trigger) trigger.focus();
        }

        if (trigger) {
            trigger.addEventListener("click", toggleDropdown);
            trigger.addEventListener("keydown", (e) => {
                if (e.key === "ArrowDown" || e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    if (!customDropdown.classList.contains("is-open")) {
                        openDropdown();
                    } else if (items.length > 0) {
                        items[0].focus();
                    }
                } else if (e.key === "Escape") {
                    closeDropdown();
                }
            });
        }

        if (serviceLabel && trigger) {
            serviceLabel.addEventListener("click", (e) => {
                if (window.innerWidth <= 960) {
                    e.preventDefault();
                    trigger.focus();
                    toggleDropdown(e);
                }
            });
        }

        items.forEach((item, index) => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                e.stopPropagation();
                selectItem(item);
            });

            item.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    selectItem(item);
                } else if (e.key === "ArrowDown") {
                    e.preventDefault();
                    const next = items[index + 1] || items[0];
                    next.focus();
                } else if (e.key === "ArrowUp") {
                    e.preventDefault();
                    const prev = items[index - 1] || items[items.length - 1];
                    prev.focus();
                } else if (e.key === "Escape") {
                    e.preventDefault();
                    closeDropdown();
                    if (trigger) trigger.focus();
                }
            });
        });

        // Close dropdown when tapping anywhere outside
        document.addEventListener("click", (e) => {
            if (!customDropdown.contains(e.target) && e.target !== serviceLabel) {
                closeDropdown();
            }
        });

        // Sync when native select changes (e.g. browser back/forward or programmatic change)
        nativeSelect.addEventListener("change", () => {
            const currentVal = nativeSelect.value;
            const match = items.find(i => i.getAttribute("data-value") === currentVal);
            if (match) {
                const text = match.querySelector(".item-text") ? match.querySelector(".item-text").textContent.trim() : match.textContent.trim();
                if (label) label.textContent = text;
                items.forEach(i => {
                    const isMatch = (i === match);
                    i.classList.toggle("is-selected", isMatch);
                    i.setAttribute("aria-selected", isMatch ? "true" : "false");
                });
            }
        });
    }

    // --- 5. Blog Category Filter & Search Interaction ---
    const filterPills = document.querySelectorAll(".filter-pill");
    const blogCards = document.querySelectorAll(".blogs-grid .blog-card");
    const blogSearchInput = document.getElementById("blogSearchInput");

    function filterBlogs() {
        const activeCategory = document.querySelector(".filter-pill.active")?.getAttribute("data-category") || "all";
        const searchTerm = blogSearchInput ? blogSearchInput.value.toLowerCase().trim() : "";

        blogCards.forEach(card => {
            const cardCat = card.getAttribute("data-category") || "";
            const cardTitle = card.querySelector(".blog-card-title")?.textContent.toLowerCase() || "";
            const cardExcerpt = card.querySelector(".blog-excerpt")?.textContent.toLowerCase() || "";

            const matchesCategory = (activeCategory === "all" || cardCat === activeCategory);
            const matchesSearch = (searchTerm === "" || cardTitle.includes(searchTerm) || cardExcerpt.includes(searchTerm));

            if (matchesCategory && matchesSearch) {
                card.style.display = "";
            } else {
                card.style.display = "none";
            }
        });
    }

    if (filterPills.length > 0) {
        filterPills.forEach(pill => {
            pill.addEventListener("click", () => {
                filterPills.forEach(p => p.classList.remove("active"));
                pill.classList.add("active");
                filterBlogs();
            });
        });
    }

    if (blogSearchInput) {
        blogSearchInput.addEventListener("input", filterBlogs);
    }

    // --- 6. Article Reader Modal ---
    const modalOverlay = document.getElementById("articleModalOverlay");
    const modalCloseBtn = document.getElementById("modalCloseBtn");
    const openModalBtns = document.querySelectorAll("[data-open-article]");

    if (modalOverlay) {
        openModalBtns.forEach(btn => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                const articleId = btn.getAttribute("data-open-article");
                const template = document.getElementById(`article-content-${articleId}`);
                const container = document.getElementById("modalArticleTarget");

                if (template && container) {
                    container.innerHTML = template.innerHTML;
                    modalOverlay.classList.add("is-active");
                    document.body.style.overflow = "hidden";
                }
            });
        });

        if (modalCloseBtn) {
            modalCloseBtn.addEventListener("click", () => {
                modalOverlay.classList.remove("is-active");
                document.body.style.overflow = "";
            });
        }

        modalOverlay.addEventListener("click", (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove("is-active");
                document.body.style.overflow = "";
            }
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("heroCarousel");

    if (!carousel) return;

    const slides = carousel.querySelectorAll(".hero-slide");

    if (slides.length <= 1) return;

    let currentIndex = 0;

    setInterval(function () {
        slides[currentIndex].classList.remove("active");

        currentIndex = (currentIndex + 1) % slides.length;

        slides[currentIndex].classList.add("active");
    }, 5000);
});


