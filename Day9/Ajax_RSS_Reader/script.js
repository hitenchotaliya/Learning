let updateInterval;

document.addEventListener("DOMContentLoaded", function() {
    // Initial load
    loadRandomThing();
});

function startRandomUpdates() {
    // Start updating every 5 seconds
    updateInterval = setInterval(loadRandomThing, 5000);

    // Disable the start button while updating
    document.getElementById('startButton').disabled = true;

    // Enable the stop button
    document.getElementById('stopButton').disabled = false;
}

function stopRandomUpdates() {
    // Stop the updating interval
    clearInterval(updateInterval);

    // Enable the start button
    document.getElementById('startButton').disabled = false;

    // Disable the stop button
    document.getElementById('stopButton').disabled = true;
}


function loadRandomThing() {
    // Fetch data from PHP page
    fetch('rssTrack.php')
        .then(response => response.json())
        .then(data => {
            // console.log('Data received:', data);

            // Check if the required properties are present in the data
            if (data.channel && data.channel.item) {
                // Get random item from the RSS feed
                const randomIndex = Math.floor(Math.random() * data.channel.item.length);
                const randomThing = data.channel.item[randomIndex];

                // Display the random thing
                displayRandomThing(randomThing);
            } else if (data.length > 0) {
                // Adjust for the case where 'channel' property is present
                const randomIndex = Math.floor(Math.random() * data.length);
                const randomThing = data[randomIndex];

                // Display the random thing
                displayRandomThing(randomThing);
            } else {
                console.error('Invalid data structure:', data);
            }
        })
        .catch(error => console.error('Error fetching data:', error));
}

function displayRandomThing(randomThing) {
    // Display the random thing
    const randomThingContainer = document.getElementById('randomThing');
    
    // Customize this part based on your data structure
    const htmlContent = `
        <strong>Artist:</strong> ${randomThing.artistName}<br>
        <strong>Album:</strong> ${randomThing.name}<br>
        <strong>Release Date:</strong> ${randomThing.releaseDate}<br>
    `;

    randomThingContainer.innerHTML = htmlContent;
}
