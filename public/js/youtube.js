// Global variable to store the nextPageToken
let nextPageToken = null;

// Global variables to store video data and pagination state
let videoData = [];
let currentPage = 1;
const videosPerPage = 9; // Adjust the number of videos per page as needed

// Function to fetch all videos from the channel
function fetchAllVideos() {
    fetchVideosPage();
}

// Function to fetch a page of videos
function fetchVideosPage() {
    let apiUrl = `https://www.googleapis.com/youtube/v3/search?key=AIzaSyDLA3vVxcamKR8mYikQ6KBNpokw_8F6gLQ&channelId=UCdS_efykgspWbeNAfZEwB0w&part=snippet,id&order=date&maxResults=50`;

    // If nextPageToken is available, append it to the API URL
    if (nextPageToken) {
        apiUrl += `&pageToken=${nextPageToken}`;
    }

    fetch(apiUrl)
    .then((data) => {
        return data.json();
    }).then((completedData) => {
        console.log(completedData);
        
        videoData.push(...completedData.items);

        // Check if there are more videos to fetch
        if (completedData.nextPageToken) {
            // If there are more videos, update nextPageToken and fetch next page
            nextPageToken = completedData.nextPageToken;
            fetchVideosPage();
        } else {
            // Once all videos are fetched, initialize pagination
            initializePagination();
        }
    }).catch((error) => {
        console.log("Error:", error);
    });
}

// Function to initialize pagination
function initializePagination() {
    renderVideosForPage(currentPage);
    renderPaginationButtons();
}

// Function to render videos for the current page
function renderVideosForPage(page) {
    const startIndex = (page - 1) * videosPerPage;
    const endIndex = startIndex + videosPerPage;
    const videosForPage = videoData.slice(startIndex, endIndex);

    const videoItemsContainer = document.getElementById('video-items');
    videoItemsContainer.innerHTML = '';

    videosForPage.forEach((item) => {
        const videoId = item.id.videoId;
        const title = item.snippet.title;
        
        const videoContainer = document.createElement('div');
        videoContainer.classList.add('video-container');
        
        const videoPlayer = document.createElement('iframe');
        videoPlayer.setAttribute('width', '100%');
        videoPlayer.setAttribute('height', '300px');
        videoPlayer.setAttribute('src', `https://www.youtube.com/embed/${videoId}`);
        videoPlayer.setAttribute('frameborder', '0');
        videoPlayer.setAttribute('allowfullscreen', '');
        
        const titleElement = document.createElement('h3');
        titleElement.textContent = title;
        
        videoContainer.appendChild(videoPlayer);
        videoContainer.appendChild(titleElement);
        
        videoItemsContainer.appendChild(videoContainer);
    });
}

// Function to render pagination buttons
function renderPaginationButtons() {
    const totalPages = Math.ceil(videoData.length / videosPerPage);
    const paginationContainer = document.getElementById('pagination');

    paginationContainer.innerHTML = '';

    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement('button');
        button.textContent = i;
        button.classList.add('pagination-button');
        if (i === currentPage) {
            button.classList.add('active');
        }
        button.addEventListener('click', () => {
            currentPage = i;
            renderVideosForPage(currentPage);
            updateActiveButton();
        });
        paginationContainer.appendChild(button);
    }
}

// Function to update active pagination button
function updateActiveButton() {
    const buttons = document.querySelectorAll('.pagination-button');
    buttons.forEach((button, index) => {
        if (index + 1 === currentPage) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    });
}

// Fetch all videos and display them on page load
window.onload = function() {
    fetchAllVideos();
};