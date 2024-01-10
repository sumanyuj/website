

document.addEventListener('DOMContentLoaded', function() {
    console.log('Your web page is loaded and ready!');
});







    // Matter.js module aliases
    var Engine = Matter.Engine,
        Render = Matter.Render,
        World = Matter.World,
        Bodies = Matter.Bodies;

    // create an engine and a renderer
    var engine = Engine.create();
    var render = Render.create({
        element: document.body,
        engine: engine,
        options: {
            width: window.innerWidth,
            height: window.innerHeight,
            wireframes: false,
            background: 'transparent'
        }
    });

    // create three rectangle bodies for the pods
    var pod1 = Bodies.rectangle(40, -50, 100, 50, { isStatic: false, render: { visible: false }, restitution: 1, friction: 0, frictionStatic: 0 });
    var pod2 = Bodies.rectangle(30, -150, 100, 50, { isStatic: false, render: { visible: false }, restitution: 1, friction: 0, frictionStatic: 0 });
    var pod3 = Bodies.rectangle(50, -250, 100, 50, { isStatic: false, render: { visible: false }, restitution: 1, friction: 0, frictionStatic: 0 });
    var pod4 = Bodies.rectangle(100, -250, 100, 50, { isStatic: false, render: { visible: false }, restitution: 1, friction: 0, frictionStatic: 0 });


    // create a ground
    var ground = Bodies.rectangle(window.innerWidth / 2, window.innerHeight, window.innerWidth, 100, { isStatic: true, restitution: 0.5, friction: 0, frictionStatic: 0 });

    // create the left and right bounds
    var leftWall = Bodies.rectangle(0, window.innerHeight-50 / 2, 1, window.innerHeight, { isStatic: true, restitution: 0.5, friction: 0, frictionStatic: 0 });
    var rightWall = Bodies.rectangle(window.innerWidth-100, window.innerHeight / 2, 1, window.innerHeight, { 
        isStatic: true, 
        restitution: 0.5, 
        friction: 0, 
        frictionStatic: 0, 
        render: { visible: false } // Add this property to make the body invisible.
    });

    // add the ground and bounds to the world
    World.add(engine.world, [ground, leftWall, rightWall]);

    // add the pods to the world with a delay
    setTimeout(function() { World.add(engine.world, pod1); }, 500); // 500 ms delay
    setTimeout(function() { World.add(engine.world, pod2); }, 1000); // 1000 ms delay
    setTimeout(function() { World.add(engine.world, pod3); }, 1500); // 1500 ms delay
    setTimeout(function() { World.add(engine.world, pod4); }, 2000); // 1500 ms delay

    // run the engine and the renderer
    Engine.run(engine);
    Render.run(render);

    // update the position and rotation of the pods to match the physics simulation
    setInterval(function() {
        updatePod('pod1', pod1);
        updatePod('pod2', pod2);
        updatePod('pod3', pod3);
        updatePod('pod4', pod4);
    }, 1000 / 60); // 60 FPS

    function updatePod(id, body) {
        var pod = document.getElementById(id);
        pod.style.left = body.position.x + 'px';
        pod.style.top = body.position.y + 'px';
        pod.style.transform = 'rotate(' + body.angle * (180 / Math.PI) + 'deg)';
    }

    setTimeout(function() {
        // Move the projects button down after 1 second
        document.getElementById('myButton').classList.add('moved');
      
        setTimeout(function() {
          // Make the new button visible and move it in from the left after another second
          document.getElementById('newButton').classList.add('visible');
    
          // Make the 'nightrunning' button visible and move it in from the right after another second
          document.getElementById('myButton').classList.add('visible');
        }, 1000); // 1000 ms delay for second animation
      }, 1000); // 1900 ms delay for first animation