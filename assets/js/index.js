const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 1000);

camera.position.z = 1
camera.rotation.x = Math.PI / 2

const renderer = new THREE.WebGLRenderer({
    canvas: document.querySelector("#bg"),
    alphae: true
})

// renderer.setPixelRatio(window.devicePixelRatio)

renderer.setSize(window.innerWidth, window.innerHeight)

const animate = () => {

    starGeo.vertices.forEach(vertex => {

    vertex.velocity += vertex.acceleration
    vertex.y -= vertex.velocity

    if (vertex.y < -200) {
        vertex.y = 200
        vertex.velocity = 0
    }
    });

    starGeo.verticesNeedUpdate = true;
    stars.rotation.y += 0.002


    requestAnimationFrame(animate)
    renderer.render(scene, camera)
}


const starGeo = new THREE.Geometry();

for(let i=0;i<6000;i++) {
    
    const star = new THREE.Vector3(
        Math.random() * 600 - 300,
        Math.random() * 600 - 300,
        Math.random() * 600 - 300
        );

        star.velocity = 0
        star.acceleration = 0.02
        
        starGeo.vertices.push(star)
        
    }
    
    // starGeo.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3))
    
    let textureLoader = new THREE.TextureLoader()
    
    const starTexture = textureLoader.load('assets/img/star.png')
    
    let starMaterial = new THREE.PointsMaterial({
        color: 0xaaaaaa,
        size: 0.7,
        map: starTexture
    })
    
    const stars = new THREE.Points(starGeo, starMaterial)
    
    scene.add(stars)
    animate();