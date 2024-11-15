import { Howl } from "howler";

const soundPlayer = {
    currentSound: null,

    playSound(soundFile, callback) {
        if (this.currentSound) {
            // Stop the current sound if a different one is selected
            this.currentSound.stop();
        }

        this.currentSound = new Howl({
            src: [soundFile],
            html5: true,
            volume: 1.0, // Start at full volume
            onend: () => {
                console.log(`Finished playing: ${soundFile}`);
                callback(false); // Notify Alpine.js playback has stopped
            },
        });

        this.currentSound.play();
        callback(true); // Notify Alpine.js playback has started
    },

    fadeOutSound(callback) {
        if (this.currentSound && this.currentSound.playing()) {
            // Fade out over 1 second (1000 ms)
            this.currentSound.fade(this.currentSound.volume(), 0, 1000);

            // After fade-out is complete, stop the sound and reset state
            setTimeout(() => {
                this.currentSound.stop();
                callback(false); // Notify Alpine.js playback has stopped
            }, 1000); // Match the fade duration
        }
    },

    toggleSound(soundFile, callback) {
        if (this.currentSound && this.currentSound._src === soundFile) {
            // Toggle fade-out/pause if the same sound is selected
            if (this.currentSound.playing()) {
                this.fadeOutSound(callback);
            } else {
                this.currentSound.play();
                callback(true);
            }
        } else {
            // Play a new sound
            this.playSound(soundFile, callback);
        }
    },
};

// Make the soundPlayer globally accessible
window.soundPlayer = soundPlayer;
