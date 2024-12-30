import "./bootstrap";
// Function to show the sidebar with the selected word's data

function showSidebar(wordData) {
    document.getElementById("word-name").innerText = wordData.word; // Display the word
    document.getElementById("word-pronunciation").innerText =
        wordData.pronunciation; // Display pronunciation

    // Set the audio source for the meanings and examp  les
    const meaningAudioSrc = wordData.audio; // Assuming the same audio for both meanings

    document.getElementById("meaning-text").innerText = wordData.definition;
    document.getElementById("meaning-eng-text").innerText =
        wordData.definitionEng;
    document.getElementById("example-text").innerText = wordData.example;
    document.getElementById("synonyms-text").innerText = wordData.synonyms;
    document.getElementById("antonyms-text").innerText = wordData.antonyms;

    const sidebar = document.getElementById("sidebar");
    sidebar.classList.remove("hidden"); // Show the sidebar
    sidebar.classList.add("visible"); // Add visible class

    // Add click event listeners to the audio icons
    document.getElementById("play-audio-meaning").onclick = function () {
        playAudio(meaningAudioSrc);
    };
    document.getElementById("play-audio-meaning-eng").onclick = function () {
        playAudio(meaningAudioSrc);
    };
    document.getElementById("play-audio-example").onclick = function () {
        playAudio(exampleAudioSrc);
    };
}

// Add click event listeners to hoverable words
document.querySelectorAll(".hoverable").forEach(function (element) {
    element.addEventListener("click", function () {
        const wordData = {
            word: this.getAttribute("data-word"), // Get the word
            pronunciation: this.getAttribute("data-pronunciation"), // Get pronunciation
            audio: this.getAttribute("data-audio"), // Get audio source
            definition: this.getAttribute("data-definition-tag"),
            definitionEng: this.getAttribute("data-definition-eng"),
            example: this.getAttribute("data-example"),
            synonyms: this.getAttribute("data-synonyms"),
            antonyms: this.getAttribute("data-antonyms"),
        };
        showSidebar(wordData);
    });
});
// Close sidebar functionality
document.getElementById("close-sidebar").addEventListener("click", function () {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.add("hidden"); // Hide the sidebar
    sidebar.classList.remove("visible"); // Remove visible class
});
