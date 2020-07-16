//COUNT DOWN CODE
(function() {
    const countdown = document.querySelector(".countDown");

    //set launch date
    const launchDate = new Date("Jan 4 2021 8: 00: 00").getTime();
    
    //display every seconds
    const displayInterval = setInterval(()=>  {
        //get today's date in ms 
        const now = new Date().getTime();
        
        //diff btn now and launch date 
        const timeDiff = launchDate - now;
    
        //time calculations
        const days = Math.floor((timeDiff / (1000*60*60*24)));
        const hours = Math.floor((timeDiff % (1000*60*60*24) / (1000*60*60)));
        const mins = Math.floor((timeDiff % (1000*60*60) / (1000*60)));
        const secs = Math.floor((timeDiff % (1000*60) / (1000)));
        // console.log(`${days} : ${hours} : ${mins} : ${secs}`);
    
        countdown.innerHTML = `
            <div>${days}<span>Days</span></div>
            <div>${hours}<span>Hours</span></div>
            <div>${mins}<span>Minutes</span></div>
            <div>${secs}<span>Seconds</span></div>
        `
    
        //if launch date exceeded 
        if (timeDiff < 0) {
            clearInterval(displayInterval)
            countdown.style.backgroundColor = "#D99D49";
            countdown.textContent = "Launched !";
        }
    
    }, 1000);
})();


