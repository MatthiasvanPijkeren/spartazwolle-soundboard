import { Howl } from "howler";

const soundPlayer = {
    currentSound: null, // Tracks the currently playing sound

    playSound(soundFile) {
        if (this.currentSound && this.currentSound._src === soundFile) {
            if (this.currentSound.playing()) {
                this.currentSound.pause();
                console.log("Sound paused.");
            } else {
                this.currentSound.play();
                console.log("Sound resumed.");
            }
        } else {
            if (this.currentSound) {
                this.currentSound.stop();
            }

            this.currentSound = new Howl({
                src: [soundFile],
                html5: true,
                onplay: () => console.log(`Playing: ${soundFile}`),
                onend: () => console.log(`Finished playing: ${soundFile}`),
            });

            this.currentSound.play();
        }
    },
};

// Make soundPlayer globally accessible
window.soundPlayer = soundPlayer;
