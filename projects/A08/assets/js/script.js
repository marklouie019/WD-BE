
function viewMemory(memoryID) {

    var allMemories = document.querySelectorAll('.core-memory');
    var selectedMemory = document.getElementById(memoryID);
    var memoryDescription = selectedMemory.getAttribute('data-description');
    var memoryDescParag = document.querySelector('.memory-description p');

    allMemories.forEach(function (memory) {
        memory.style.opacity = 0.5;
    });

    selectedMemory.style.opacity = 1;
    memoryDescParag.textContent = memoryDescription;
}

viewMemory('memory1');