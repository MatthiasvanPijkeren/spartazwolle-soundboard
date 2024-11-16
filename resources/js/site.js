import { Howl } from "howler";

const soundPlayer = {
    currentSound: null,

    playSound(soundFile, callback) {
        if (this.currentSound) {
            this.currentSound.stop();
        }

        this.currentSound = new Howl({
            src: [soundFile],
            html5: true,
            volume: 1.0,
            onend: () => {
                callback(false);
            },
        });

        this.currentSound.play();
        callback(true);
    },

    fadeOutSound(callback) {
        if (this.currentSound && this.currentSound.playing()) {
            this.currentSound.fade(this.currentSound.volume(), 0, 1000);

            setTimeout(() => {
                this.currentSound.stop();
                this.currentSound = null;
                callback(false);
            }, 1000);
        }
    },

    toggleSound(soundFile, callback) {
        if (this.currentSound && this.currentSound._src === soundFile) {
            if (this.currentSound.playing()) {
                this.fadeOutSound(callback);
            } else {
                this.currentSound.play();
                callback(true);
            }
        } else {
            this.playSound(soundFile, callback);
        }
    },
};

window.soundPlayer = soundPlayer;
