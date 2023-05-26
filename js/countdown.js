// -------------------------------------- <COMPTE A REBOURS> --------------------------------------

function countdown() {
    const deadline = new Date("2030-01-01T00:00:00");
    const now = new Date();

    const timeLeft = deadline.getTime() - now.getTime();

    const seconds = Math.floor((timeLeft / 1000) % 60);
    const minutes = Math.floor((timeLeft / 1000 / 60) % 60);
    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));

    const remainingYears = Math.floor(days / 365);
    const remainingMonths = Math.floor((days % 365) / 30);
    const remainingDays = (days % 365) % 30;

    document.getElementById("years").textContent = remainingYears.toString().padStart(2, "0");
    document.getElementById("months").textContent = remainingMonths.toString().padStart(2, "0");
    document.getElementById("days").textContent = remainingDays.toString().padStart(2, "0");
    document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
    document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
    document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
}

setInterval(countdown, 1000);
countdown();

// -------------------------------------- </COMPTE A REBOURS> --------------------------------------