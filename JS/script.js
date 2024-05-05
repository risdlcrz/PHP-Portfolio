window.onload = function() {
    const personalInfoContainer = document.querySelector('.personal-info');
    const educationContainer = document.querySelector('.education');
    const skillsContainer = document.querySelector('#Skills');
    const languagesContainer = document.querySelector('#Languages');

    for (const key in personalInfo) {
        personalInfoContainer.innerHTML += `<p>${key}: ${personalInfo[key]}</p>`;
    }

    for (const edu of education) {
        educationContainer.innerHTML += `<h4>${edu.school}</h4>`;
        edu.details.forEach(detail => {
            educationContainer.innerHTML += `<p>${detail}</p>`;
        });
    }

    skills.forEach(skill => {
        skillsContainer.innerHTML += `<p>${skill}</p>`;
    });

    for (const language in languages) {
        const languageElement = document.createElement('div');
        languageElement.className = 'language';

        const languageName = document.createElement('div');
        languageName.className = 'language-name';
        languageName.textContent = language;
        languageElement.appendChild(languageName);

        const progressBar = document.createElement('div');
        progressBar.className = 'progress-bar';

        const progressBarInner = document.createElement('div');
        progressBarInner.className = 'progress-bar-inner';
        progressBarInner.style.width = `${languages[language]}%`;
        progressBar.appendChild(progressBarInner);

        languageElement.appendChild(progressBar);
        languagesContainer.appendChild(languageElement);
    }

    document.getElementById('profile-picture').src = personalInfo['Picture'];

    // Tab functionality
    document.getElementById("defaultOpen").click();
};

function openTab(tabName, elmnt) {
    // Hide all elements with class="tabcontent"
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the active class from all elements with class="tablink"
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    elmnt.className += " active";
}

// Get the element with id="defaultOpen" and click on it
window.onload = function() {
    document.getElementById("defaultOpen").click();
};