// Try to learn JavaScript and Objective Programming
// Nevertheless my English skills also have to be improved


function CreateNewBottle(brand) {
    let drinking = false;
    let closed = true;
    let capacity, water = 1.0;
    let interval = null;
    
    this.drink = () => {
            if(closed) {throw new Error(`You can't drink form closed bottle :)`);}
            drinking = true;
            interval = setInterval( () => {
                water -= 0.02;
                if (water <= 0) {
                    drinking = false;
                    water = 0;
                    console.log(`The bottle is empty :( Fill it up!`);
                    clearInterval(interval);
                }
            }, 150)
            console.log(`You are drinking water right now!`)
            return interval;
    }
    

    this.stopDrink = () => {
        if(!drinking) throw new Error(`You're not drinking`);
        drinking = false
        clearInterval(interval);
        console.log(`You stopped drinking water`);
    }
    this.unscrew = () => {
        if(!closed) throw new Error('The bottle has already unscrewed');
        closed = false;
        return 'The bottle has been unscrewed';
    }

    this.screw = () => {
        if(closed) throw new Error('THe bottle has already screwed');
        closed = true;
        return 'The bottle has been screewed';
    }

    this.sayBrand = () => {
        return `WoW it's ${this.brand} O.o` ;
    }

    this.sayCapacity = () => {
        return `Bottle has ${this.cappacity} l`;
    }

    this.sayWaterLeft = () => {
        if(water === 0) {return `The bottle is empty :( Fill it up!`}
        return `${water.toPrecision(2)} left in bottle`;
    }

    this.fillUpWater = () => {
        if (water === 1.0) throw new Error('Bottle has already full');
        else if (closed) throw new Error('The bottle is closed');

        water = 1.0;
        return `You filled up the bottle`;
    }

    Object.defineProperty(this, 'capacity', {
        get() {return capacity},
        configurable: false
    });

    Object.defineProperty(this, 'brand', {
        get() {return brand},
        configurable: false
        })
    }

console.log(
`Aviable commands: 
bottle.unscrew()
bottle.screw()
bottle.drink()
bottle.stopDrink()
bottle.sayBrand()
bottle.sayCapacity()
bottle.sayWaterLeft()
bottle.fillUpWater()
bottle.capacity
bottle.brand
`);

const bottle = new CreateNewBottle('Cisowianka');