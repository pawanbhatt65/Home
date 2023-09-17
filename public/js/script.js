"use strict";

document.addEventListener("DOMContentLoaded", function () {
    // Function to increment the counter
    function incrementCounter(startValue, endValue, element, duration) {
        let count = startValue;
        const increment = (endValue - startValue) / duration;

        const interval = setInterval(() => {
            count += increment;
            element.innerHTML = `${Math.round(count)}${
                endValue > 500 ? "K" : ""
            }+`;

            if (count >= endValue) {
                clearInterval(interval);
            }
        }, 4);
    }

    // name change handler function
    const nameChangeHandler = function (event, error, element) {
        event.preventDefault();
        const nameValue = event.target.value;
        const regEx = /^[a-zA-Z\s]+$/;

        if (nameValue.trim().length === 0) {
            error.textContent = "Please enter your full name!";
        } else if (nameValue.trim().length <= 4) {
            error.textContent = "Please enter minimum 4 letter name!";
        } else if (!regEx.test(nameValue)) {
            error.textContent = "Please enter only letter!";
        } else {
            error.textContent = "";
        }
    };

    // email change handler function
    const emailChangeHandle = function (event, error, element) {
        event.preventDefault();
        const emailValue = event.target.value;
        const regEx = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (emailValue.trim().length === 0) {
            error.textContent = "Please enter your email address!";
        } else if (!regEx.test(emailValue)) {
            error.textContent = "Please enter your valid email address!";
        } else {
            error.textContent = "";
        }
    };

    // service type change handler function
    const serviceTypeChangeHandler = function (event, error, element) {
        event.preventDefault();
        const serviceValue = event.target.value;
        if (serviceValue === "") {
            error.textContent = "Please select your type of service!";
        } else {
            error.textContent = "";
        }
    };

    // phone change handler function
    const phoneChangeHandler = function (event, error, element) {
        const phoneValue = event.target.value;
        const regEx = /^[0-9]+$/;
        if (phoneValue.trim().length === 0) {
            error.textContent = "Please enter your phone number!";
        } else if (phoneValue.trim().length !== 10) {
            error.textContent = "Please enter 10 digits number!";
        } else if (!regEx.test(phoneValue)) {
            error.textContent = "Please enter only number!";
        } else {
            error.textContent = "";
        }
    };

    // message change handler function
    const messageChangeHandler = function (event, error, maxLength) {
        const messageValue = event.target.value;
        let maxLimit = 500;
        if (messageValue.length > maxLimit) {
            return false;
        }
        maxLength.textContent = `${messageValue.length}/500`;
        if (messageValue.trim().length === 0) {
            error.textContent = "Please enter your message!";
        } else {
            error.textContent = "";
        }
    };

    // checkbox change handler function
    const checkBoxChangeHandler = function (element, error) {
        if (!element.checked) {
            error.textContent = "Please select checkbox!";
        } else {
            error.textContent = "";
        }
    };

    // Define your variables and their end values
    const totalSquareAreaCount = document.getElementById(
        "totalSquareAreaCount"
    );
    const solidApartmentCount = document.getElementById("solidApartmentCount");
    const totalConstructionsCount = document.getElementById(
        "totalConstructionsCount"
    );
    const apartioRoomsCount = document.getElementById("apartioRoomsCount");

    // bottom to top
    const bottomToTop=document.querySelector(".bottomToTop")

    // contact.blade.php
    const contactForm = document.contactForm;
    // input element id
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const serviceType = document.getElementById("serviceType");
    const phone = document.getElementById("phone");
    const message = document.getElementById("message");
    const checkbox = document.getElementById("checkbox");
    // error
    const nameError = document.querySelector(".nameError");
    const emailError = document.querySelector(".emailError");
    const serviceTypeError = document.querySelector(".serviceTypeError");
    const phoneError = document.querySelector(".phoneError");
    const messageError = document.querySelector(".messageError");
    const checkBoxError = document.querySelector(".checkBoxError");
    // max length element
    const maxLength = document.getElementById("maxLength");

    // home.blade.php
    // appartment sketch
    const tabHeaderBtns = document.querySelectorAll(".tab-header-btn");
    const tabBodyes = document.querySelectorAll(".tab-body");

    // home-style-1.blade.php
    // Appartments
    const topHeaderBtns = document.querySelectorAll(".tob-header-btn");
    const bottomBodys = document.querySelectorAll(".bottom-body");
    // neighbour
    const accordionBtns = document.querySelectorAll(".accourdion-btn");
    const accordionContainers = document.querySelectorAll(
        ".accourdion-container"
    );

    // bottom to top
    if(bottomToTop){
        window.addEventListener("scroll", function(){
            if(this.window.pageYOffset > 300){
                // console.log(this)
                bottomToTop.classList.add("active")
            }else {
                bottomToTop.classList.remove("active")
            }
        })
        bottomToTop.addEventListener("click",event=>{
            event.preventDefault()
            window.scrollTo({top: 0, behavior: "smooth"})
        })
    }

    // home.blade.php
    // appartment sketch
    if (tabHeaderBtns && tabBodyes) {
        // Add a click event listener to each tab header button
        tabHeaderBtns.forEach((tabHeaderBtn) => {
            tabHeaderBtn.addEventListener("click", () => {
                // Remove the "active" class from all tab header buttons
                tabHeaderBtns.forEach((btn) => {
                    btn.classList.remove("active");
                });

                // Add the "active" class to the clicked tab header button
                tabHeaderBtn.classList.add("active");

                // Get the data-filter attribute of the clicked tab header button
                const dataFilter = tabHeaderBtn.getAttribute("data-filter");

                // Hide all tab bodies
                tabBodyes.forEach((tabBody) => {
                    tabBody.classList.remove("active");
                });

                // Show the tab body corresponding to the clicked tab header button
                const activeTabBody = document.querySelector(
                    `.tab-body.${dataFilter}`
                );
                if (activeTabBody) {
                    activeTabBody.classList.add("active");
                }
            });
        });
    }

    if (totalSquareAreaCount) {
        const endSquareArea = 560;
        const endSolidApartment = 197;
        const endTotalConstructions = 268;
        const endApartioRooms = 340;

        // Determine the maximum duration among all counters
        const maxDuration = Math.max(
            endSquareArea,
            endSolidApartment,
            endTotalConstructions,
            endApartioRooms
        );

        // Start all counters with the maximum duration
        incrementCounter(0, endSquareArea, totalSquareAreaCount, maxDuration);
        incrementCounter(
            0,
            endSolidApartment,
            solidApartmentCount,
            maxDuration
        );
        incrementCounter(
            0,
            endTotalConstructions,
            totalConstructionsCount,
            maxDuration
        );
        incrementCounter(0, endApartioRooms, apartioRoomsCount, maxDuration);
    }

    // home-style-1.blade.php
    // Appartments
    if (topHeaderBtns && bottomBodys) {
        topHeaderBtns.forEach((topHeaderBtn) => {
            topHeaderBtn.addEventListener("click", (event) => {
                event.preventDefault();

                // remove active class for all buttons
                topHeaderBtns.forEach((btn) => {
                    btn.classList.remove("active");
                });
                // add active class
                topHeaderBtn.classList.add("active");
                // get data-style attribute
                const dataStyle = topHeaderBtn.getAttribute("data-style");
                // remove active class all bottom bodies
                bottomBodys.forEach((body) => {
                    body.classList.remove("active");
                });
                const activeBody = document.querySelector(
                    `.bottom-body.${dataStyle}`
                );
                if (activeBody) {
                    activeBody.classList.add("active");
                }
            });
        });
    }
    // neighbours
    if (accordionBtns && accordionContainers) {
        accordionBtns.forEach((accordionBtn) => {
            accordionBtn.addEventListener("click", (event) => {
                event.preventDefault();
                accordionBtns.forEach((btn) => {
                    btn.parentElement.classList.remove("active");
                });
                accordionBtn.parentElement.classList.add("active");
                const accordionAttribute =
                    accordionBtn.getAttribute("data-accoudion-btn");
                accordionContainers.forEach((container) => {
                    container.classList.remove("active");
                });

                const activeContainer = document.querySelector(
                    `.accourdion-container.${accordionAttribute}`
                );
                if (activeContainer) {
                    activeContainer.classList.add("active");
                }
            });
        });
    }

    // if contact.blade.php page is
    if (contactForm) {
        name.addEventListener("keyup", function (event) {
            nameChangeHandler(event, nameError, name);
        });
        email.addEventListener("keyup", function (e) {
            emailChangeHandle(e, emailError, email);
        });
        serviceType.addEventListener("change", function (event) {
            serviceTypeChangeHandler(event, serviceTypeError, serviceType);
        });
        phone.addEventListener("keyup", function (event) {
            phoneChangeHandler(event, phoneError, phone);
        });
        message.addEventListener("keyup", function (event) {
            messageChangeHandler(event, messageError, maxLength);
        });
        checkbox.addEventListener("change", function () {
            checkBoxChangeHandler(checkbox, checkBoxError);
        });
        contactForm.addEventListener("submit", (event) => {
            const name = contactForm.name;
            const email = contactForm.email;
            const serviceType = contactForm.serviceType;
            const phone = contactForm.phone;
            const message = contactForm.message;
            const checkbox = contactForm.checkbox;

            if (name.value.trim().length === 0) {
                nameError.textContent = "Please enter your full name!";
                name.focus();
                event.preventDefault();
            } else if (nameError.textContent) {
                nameError.textContent = "Please enter valid name!";
                name.focus();
                event.preventDefault();
            } else if (email.value.trim().length === 0) {
                emailError.textContent = "Please enter your email address!";
                email.focus();
                event.preventDefault();
            } else if (emailError.textContent) {
                emailError.textContent =
                    "Please enter your valid email address!";
                email.focus();
                event.preventDefault();
            } else if (serviceType.value === "") {
                serviceTypeError.textContent =
                    "Please select your type of service!";
                serviceType.focus();
                event.preventDefault();
            } else if (serviceTypeError.textContent) {
                serviceTypeError.textContent =
                    "Please select your valid service!";
                serviceType.focus();
                event.preventDefault();
            } else if (phone.value.trim().length === 0) {
                phoneError.textContent = "Please enter your phone number!";
                phone.focus();
                event.preventDefault();
            } else if (phoneError.textContent) {
                phoneError.textContent =
                    "Please enter your valid phone number!";
                phone.focus();
                event.preventDefault();
            } else if (message.value.trim().length === 0) {
                messageError.textContent = "Please enter your message!";
                message.focus();
                event.preventDefault();
            } else if (!checkbox.checked) {
                checkBoxError.textContent = "Please select checkbox!";
                checkbox.focus();
                event.preventDefault();
            } else {
                name.value = "";
                email.value = "";
                serviceType.value = "";
                phone.value = "";
                message.value = "";
                checkbox.checked = false;
                maxLength.textContent = "0/500";
                // return true;
                event.preventDefault();
            }
        });
    }
});
