import './bootstrap';
import Alpine from 'alpinejs';
import JSConfetti from 'js-confetti'

window.Alpine = Alpine;

Alpine.start();

const jsConfetti = new JSConfetti()
window.confetti = () => jsConfetti.addConfetti()