<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

<style>
:root{
  --accent: #a100ff;
  --accent-soft: rgba(161,0,255,.15);
  --bg-dark: #0f0f1a;
  --bg-gradient: radial-gradient(circle at 20% 20%, #1a0033, #0f0f1a 60%);
  --white: #ffffff;
  --muted: rgba(255,255,255,.6);
  --line: rgba(255,255,255,.1);
}

*{box-sizing:border-box;margin:0;padding:0}

body{
  font-family: system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
  background: var(--bg-gradient);
  color: var(--white);
}

/* HEADER */
.site-header{
  border-bottom: 1px solid var(--line);
  backdrop-filter: blur(10px);
}

.site-header__inner{
  max-width:1200px;
  margin:0 auto;
  padding:24px 20px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}

.brand__title{
  font-size:24px;
  font-weight:700;
}

.brand__meta{
  font-size:13px;
  color:var(--muted);
  margin-top:4px;
}

.pill{
  padding:10px 18px;
  border-radius:999px;
  background: var(--accent-soft);
  border:1px solid var(--accent);
  font-size:14px;
  font-weight:600;
}

/* HERO */
.hero{
  max-width:1200px;
  margin:100px auto;
  padding:0 20px;
  display:flex;
  flex-direction:column;
  gap:30px;
}

.hero h1{
  font-size:52px;
  font-weight:800;
  line-height:1.1;
}

.hero h1 span{
  color: var(--accent);
}

.hero p{
  font-size:18px;
  color:var(--muted);
  max-width:650px;
}

.hero-buttons{
  display:flex;
  gap:20px;
  margin-top:20px;
}

.btn{
  padding:14px 28px;
  border-radius:4px;
  font-weight:600;
  text-decoration:none;
  transition:.3s ease;
}

.btn-primary{
  background: var(--accent);
  color:#fff;
}

.btn-primary:hover{
  background:#c84dff;
}

.btn-outline{
  border:1px solid var(--accent);
  color:var(--accent);
}

.btn-outline:hover{
  background: var(--accent-soft);
}

/* SHOWCASE */
.showcase{
  max-width:1200px;
  margin:80px auto;
  padding:0 20px;
  display:flex;
  flex-direction:column;
  gap:100px;
}

.section-block{
  display:flex;
  flex-direction:column;
  gap:20px;
}

.section-block h2{
  font-size:36px;
  font-weight:700;
}

.section-block h2 span{
  color:var(--accent);
}

.section-subtitle{
  color:var(--muted);
  max-width:600px;
}

.image-card{
  margin-top:20px;
  border-radius:12px;
  overflow:hidden;
  border:1px solid var(--line);
  background:rgba(255,255,255,.03);
  transition:0.3s ease;
}

.image-card:hover{
  transform:scale(1.02);
}

.image-card img{
  width:100%;
  display:block;
}

/* BEAUTIFUL FOOTER */
.site-footer{
  margin-top:120px;
  background:linear-gradient(180deg,#120022,#0b0018);
  border-top:1px solid var(--line);
  padding:60px 20px 30px;
}

.footer-container{
  max-width:1200px;
  margin:0 auto;
  display:flex;
  justify-content:space-between;
  gap:60px;
  flex-wrap:wrap;
}

.footer-column{
  flex:1;
  min-width:220px;
}

.footer-column h3,
.footer-column h4{
  margin-bottom:15px;
}

.footer-column p{
  color:var(--muted);
  line-height:1.6;
}

.footer-column ul{
  list-style:none;
  padding-left:0;
}

.footer-column ul li{
  margin-bottom:10px;
}

.footer-column a{
  color:var(--accent);
  text-decoration:none;
  position:relative;
  transition:0.3s ease;
}

.footer-column a::after{
  content:'';
  position:absolute;
  width:0%;
  height:2px;
  bottom:0;
  left:0;
  background-color:#c84dff;
  transition:0.3s;
}

.footer-column a:hover::after{
  width:100%;
}

.footer-bottom{
  margin-top:50px;
  text-align:center;
  color:var(--muted);
  font-size:14px;
  border-top:1px solid var(--line);
  padding-top:20px;
}

@media(max-width:768px){
  .hero h1{font-size:36px}
  .footer-container{flex-direction:column;gap:40px;}
}
</style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
    <div>
      <div class="brand__title"><?php bloginfo('name'); ?></div>
      <div class="brand__meta">Cloud DevOps Bootcamp Project</div>
    </div>
    <div class="pill">v1.6 • warmup 120s</div>
  </div>
</header>

<section class="hero">
  <h1>
    Scalable <span>Cloud Architecture</span><br>
    Powered by AWS & CI/CD
  </h1>

  <p>
    Production-ready WordPress deployment using Docker, Terraform,
    Auto Scaling, Application Load Balancer and GitHub Actions.
  </p>

  <div class="hero-buttons">
    <a href="https://docs.google.com/presentation/d/16FV44nByLytCpr4fS2Nfs1ISrOcllW1ZACQEdZcVv_M/edit?usp=sharing" 
       target="_blank" rel="noopener noreferrer"
       class="btn btn-primary">
       View Architecture
    </a>

    <a href="https://github.com/kostomukshin/Team3-Bootcamp-FinalTask/tree/main" 
       target="_blank" rel="noopener noreferrer"
       class="btn btn-outline">
       Git Repository
    </a>
  </div>
</section>

<section class="showcase">
  <div class="section-block">
    <h2>Our <span>Dream Team</span></h2>
    <div class="image-card">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/team.png'); ?>" alt="Our Dream Team">
    </div>
  </div>

  <div class="section-block">
    <h2>Solution <span>Architecture</span></h2>
    <div class="image-card">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/architecture.png'); ?>" alt="Solution Architecture">
    </div>
  </div>

  <div class="section-block">
    <h2>Kanban <span>Board</span></h2>
    <div class="image-card">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/kanban.png'); ?>" alt="Kanban Board">
    </div>
  </div>
</section>
  
</body>
</html>
