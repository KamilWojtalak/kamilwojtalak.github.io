const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

const span = document.querySelector('.ball-count');
const button = document.querySelector('button');

const width = canvas.width = window.innerWidth;
const height = canvas.height = window.innerHeight;

// function to generate random number

function random(min, max) {
  const num = Math.floor(Math.random() * (max - min + 1)) + min;
  return num;
}

function Shape(x, y, velX, velY, exists) {
  this.x = x;
  this.y = y;
  this.velX = velX;
  this.velY = velY;
  this.exists = exists;
}

// define Ball constructor

function Ball(x, y, velX, velY, color, size, exists) {
  Shape.call(this, x, y, velX, velY, exists);
  this.color = color;
  this.size = size;
}

Ball.prototype = new Shape;
Ball.prototype.constructor = Ball;

// define evil circle

function EvilCircle(x, y, exists) {
  Shape.call(this, x, y, 20, 20, exists);
  this.color = '#fff';
  this.size = 20;
}



EvilCircle.prototype = new Shape;
EvilCircle.prototype.constructor = EvilCircle;

EvilCircle.prototype.draw = function() {
  ctx.beginPath();
  ctx.strokeStyle = this.color;
  ctx.lineWidth = 5;
  ctx.arc(this.x, this.y, this.size, 0, 2 * Math.PI);
  ctx.stroke();
  console.log('siema');
}

EvilCircle.prototype.checkBounds = function() {
  if((this.x + this.size) >= width) {
    this.x = this.x - this.size;
  }

  if((this.x - this.size) <= 0) {
    this.x = this.size;
  }

  if((this.y + this.size) >= height) {
    this.y = height - this.size;
  }

  if((this.y - this.size) <= 0) {
    this.y = this.size;
  }

}

EvilCircle.prototype.setControls = function() {
  let _this = this;
  window.onkeydown = function(e) {
      if (e.key === 'a' || e.key === 'ArrowLeft') {
        _this.x -= _this.velX;
      } else if (e.key === 'd' || e.key === 'ArrowRight') {
        _this.x += _this.velX;
      } else if (e.key === 'w' || e.key === 'ArrowUp') {
        _this.y -= _this.velY;
      } else if (e.key === 's' || e.key === 'ArrowDown') {
        _this.y += _this.velY;
      }
    }
}

EvilCircle.prototype.collisionDetect = function() {
  for(let j = 0; j < balls.length; j++) {
    if(balls[j].exists) {
      const dx = this.x - balls[j].x;
      const dy = this.y - balls[j].y;
      const distance = Math.sqrt(dx * dx + dy * dy);

      if (distance < this.size + balls[j].size) {
        balls[j].exists = false;
        const index = balls.indexOf(balls[j]);

        balls.splice(index, 1);
      }
    }
  }
}

const evil = new EvilCircle(
  width / 2,
  height / 2,
  true
);
evil.setControls();
// define ball draw method

Ball.prototype.draw = function() {
  ctx.beginPath();
  ctx.fillStyle = this.color;
  ctx.arc(this.x, this.y, this.size, 0, 2 * Math.PI);
  ctx.fill();
};


// define ball update method

Ball.prototype.update = function() {
  if((this.x + this.size) >= width) {
    this.velX = -(this.velX);
  }

  if((this.x - this.size) <= 0) {
    this.velX = -(this.velX);
  }

  if((this.y + this.size) >= height) {
    this.velY = -(this.velY);
  }

  if((this.y - this.size) <= 0) {
    this.velY = -(this.velY);
  }

  this.x += this.velX;
  this.y += this.velY;
};

// define ball collision detection

Ball.prototype.collisionDetect = function() {
  for(let j = 0; j < balls.length; j++) {
    if(!(this === balls[j])) {
      const dx = this.x - balls[j].x;
      const dy = this.y - balls[j].y;
      const distance = Math.sqrt(dx * dx + dy * dy);

      if (distance < this.size + balls[j].size) {
        balls[j].color = this.color = 'rgb(' + random(0,255) + ',' + random(0,255) + ',' + random(0,255) +')';
      }
    }
  }
};

// define array to store balls and populate it

let balls = [];

while(balls.length < 25) {
  const size = random(10,20);
  let ball = new Ball(
    // ball position always drawn at least one ball width
    // away from the adge of the canvas, to avoid drawing errors
    random(0 + size,width - size),
    random(0 + size,height - size),
    random(-7,7),
    random(-7,7),
    'rgb(' + random(0,255) + ',' + random(0,255) + ',' + random(0,255) +')',
    size,
    true
  );
  balls.push(ball);
}

// define loop that keeps drawing the scene constantly
function loop() {
  ctx.fillStyle = 'rgba(0,0,0,0.25)';
  ctx.fillRect(0,0,width,height);

  span.textContent = balls.length;

  for(let i = 0; i < balls.length; i++) {
    if (balls[i].exists) {
      balls[i].draw();
      balls[i].update();
      balls[i].collisionDetect();
    }
  }
  evil.draw();
  evil.checkBounds();
  evil.collisionDetect();

  requestAnimationFrame(loop);
}

loop();

button.addEventListener( 'click', function() {
  const size = random(10,20);
    for(let i = 0; i < 5; i++) {
    let ball = new Ball(
      // ball position always drawn at least one ball width
      // away from the adge of the canvas, to avoid drawing errors
      random(0 + size,width - size),
      random(0 + size,height - size),
      random(-7,7),
      random(-7,7),
      'rgb(' + random(0,255) + ',' + random(0,255) + ',' + random(0,255) +')',
      size,
      true
    );
    balls.push(ball);
  }

});