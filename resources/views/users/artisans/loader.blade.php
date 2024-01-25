<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo">
            <img src="artisan/vendors/images/apple-touch-icon.png" alt="Food Logo" />
        </div>

        <div class="loading-text">Loading...</div>
        <div class="progress-container">
            <div class="progress-bar" id="progress1">
                <div class="progress-fill" id="fill1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
        </div>


    </div>
</div>

<style>

    .pre-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 223, 132, 0.8); /* Golden color */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .pre-loader-box {
        text-align: center;
        color: #0e0d0d;
    }

    .loader-logo img {
        width: 220px; /* Adjust the width as needed */
    }

    .loading-text {
        font-size: 18px;
        margin-top: 12px;
    }



    .percent {
        height: 100%;
        background: #000; /* Black color */
        width: 100%;
        transition: none; /* Remove transition effect */
    }


    .percent {
        font-size: 14px;
        font-weight: bold;
        color: #0e0d0d;
        text-align: center;
        line-height: 20px;
        width: 0;
        height: 100%;
        background: linear-gradient(to right, #FFD700, #FFA500); /* Golden gradient */
        transition: width 0.5s ease;
    }


    .progress-container {
        width: 100%;
        margin-bottom: 10px;
    }

    .progress-bar {
        width: 100%;
        height: 15px;
        background-color: #f0f0f0;
        border-radius: 5px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        width: 0;
        background-color: #0a0a0a;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    .percent {
        font-size: 18px;
        color: #555;
        text-align: center;
        margin-top: 5px;
    }


</style>
<script>
    function updateProgressBarAnimated() {
        var fill = document.getElementById("fill1");
        var percentDiv = document.getElementById("percent1");

        var percent = 0;

        function increaseProgress() {
            if (percent <= 100) {
                fill.style.width = percent + "%";
                percentDiv.innerHTML = percent + "%";
                percent++;
                setTimeout(increaseProgress, 20); // Adjust the duration as needed
            }
        }

        increaseProgress();
    }

    // Example: Animate the progress bar from 0% to 100%
    updateProgressBarAnimated();


</script>
