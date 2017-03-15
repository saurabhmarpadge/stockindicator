
<?php include('includes/header.php');?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="main" class="jumbotron">
      <div class="container">
        <h1>Stock Market</h1>
        <p>Get latest trends of Stock Market.</p>



        <p><a class="btn btn-primary btn-lg" href="#"  role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>News</h2>
          <a class="twitter-timeline" data-width="450" data-height="400" href="https://twitter.com/NASDAQ">Tweets by NASDAQ</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Heading</h2>
          <!-- TradingView Widget BEGIN -->
          <script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
          <script type="text/javascript">
          new TradingView.widget({
            "width": 450,
            "height": 300,
            "symbol": "NASDAQ:GOOG",
            "interval": "1",
            "timezone": "Asia/Kolkata",
            "theme": "White",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "hideideas": true
          });
          </script>
          <!-- TradingView Widget END -->
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>

      </div>
<?php include('includes/footer.php');?>
