export const whiteNoise = (() => {
    const audioCtx = new (window.AudioContext || window.webkitAudioContext)();

    return options => {
        const { duration = 500, volume = 0.1 } = options;
        const bufferSize = audioCtx.sampleRate * (duration / 1000);
        const buffer = audioCtx.createBuffer(1, bufferSize, audioCtx.sampleRate);
        const data = buffer.getChannelData(0);

        for (let i = 0; i < bufferSize; i++) {
            data[i] = Math.random() * 2 - 1; // Fill with random values between -1 and 1
        }

        const whiteNoiseSource = audioCtx.createBufferSource();
        const gainNode = audioCtx.createGain();
        gainNode.gain.value = volume;

        whiteNoiseSource.buffer = buffer;
        whiteNoiseSource.connect(gainNode).connect(audioCtx.destination);
        whiteNoiseSource.start();
    };
})();
