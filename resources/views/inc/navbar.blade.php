<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Request Trakker</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id="home" class="nav-item"><a href="/home">Home</a></li>
                <li id="songs" class="nav-item"><a href="/songs">Songs</a></li>
                <li id="requests" class="nav-item"><a href="/requests">Requests</a></li>
                <li id="venues" class="nav-item"><a href="/venues">Venues</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>  
</header> 
<script type="text/javascript">
<?php 
    $link = "$_SERVER[REQUEST_URI]";
?>
var link = "<?php echo $link ?>".replace("/", ""); 
    $navitems = $("ul.nav > li"); 
    $(document).ready(function(){
        $navitems.each(function() {
            if (this.id == link) {
                this.className = "active";    
            } else { this.className = "" };
       });
    });

</script>
