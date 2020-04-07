class Bottle {
    constructor(brand) {
        this.brand = brand;
        this.drinking = false;
        this.closed = true;
        this.capacity = 1.0;
        this.water = 1.0;
        this.interval = null;
    }

    drink() {
        if(this.closed) {throw new Error(`You can't drink form closed bottle :)`);}
        this.drinking = true;
        this.interval = setInterval( () => {
                this.water -= 0.02;
                if (this.water <= 0) {
                    this.drinking = false;
                    this.water = 0;
                    console.log(`The bottle is empty :( Fill it up!`);
                    clearInterval(this.interval);
                }
            }, 150)
            console.log(`You are drinking water right now!`)
            return this.interval;
    }

    stopDrink() {
                if(!this.drinking) throw new Error(`You're not drinking`);
                this.drinking = false
                clearInterval(this.interval);
                console.log(`You stopped drinking water`);
            }
    unscrew() {
        if(!this.closed) throw new Error('The bottle has already unscrewed');
        this.closed = false;
        return 'The bottle has been unscrewed';
    }
        
    screw() {
        if(this.closed) throw new Error('The bottle has already screwed');
        this.closed = true;
        return 'The bottle has been screewed';
    }

    sayBrand() {
        return `WoW it's ${this.brand} O.o` ;
    }

    sayCapacity() {
        return `Bottle has ${this.capacity} l`;
    }

    sayWaterLeft() {
        if(this.water === 0) {return `The bottle is empty :( Fill it up!`}
        return `${this.water.toPrecision(2)} left in bottle`;
    }

    fillUpWater() {
        if (this.water === 1.0) throw new Error('Bottle has already full');
        else if (this.closed) throw new Error('The bottle is closed');

        this.water = 1.0;
        return `You filled up the bottle`;
    }

        
}

const bottle = new Bottle('Cisowianka');

window.onload = showCommands;

function showCommands() {
    console.log(
`showCommands();
bottle.unscrew();
bottle.screw();
bottle.drink();
bottle.stopDrink
bottle.sayBrand();
bottle.sayCapacity();
bottle.sayWaterLeft();
bottle.fillUpWater();
`
    )
}








