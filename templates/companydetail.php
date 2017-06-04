<?php include('includes/header.php');?>
<?php include('includes/sidebarHead.php');?>

<h1 class="page-header">About Company</h1>

        <div class="container">
          <form class="form-inline" role="form" method="post" action="company.php">
          							<div class="form-group" >
          								<label>Select Company : </label>
          								<select class="form-control" name="companyid" style="width:200px;">
                            <?php foreach(getCompanies() as $company) : ?>
                            <option value="<?php echo $company->companyid; ?>"><?php echo $company->companyname;?></option>
                            <?php endforeach; ?>
          							  </select>
          							</div>
                      <button id="do_search" name="do_search"type="submit" class="btn btn-default">Search</button>
                      </form>
        </div>
        <!-- Main jumbotron for a primary marketing message or call to action -->

          <div class="container">


            <div class="row">
              <div class="col-sm-6">
                <h1 style="font-size:6em; padding:10px 100px;">Intel</h1>
              </div>
              <div class="col-sm-6">
                  <img src="<?php echo BASE_URI;?>templates/img/intel.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail" style="padding-left:10px;">
              </div>
              <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Intel Corporation (also known as Intel, stylized as intel) is an American multinational corporation and technology company headquartered in Santa Clara, California (colloquially referred to as "Silicon Valley") that was founded by Gordon Moore (of Moore's law fame) and Robert Noyce. It is the world's largest and highest valued semiconductor chip makers based on revenue, and is the inventor of the x86 series of microprocessors: the processors found in most personal computers (PCs). Intel supplies processors for computer system manufacturers such as Apple, Lenovo, HP, and Dell. Intel also manufactures motherboard chipsets, network interface controllers and integrated circuits, flash memory, graphics chips, embedded processors and other devices related to communications and computing.</p>
              <br>
              <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIntel Corporation was founded on July 18, 1968, by semiconductor pioneers Robert Noyce and Gordon Moore, and widely associated with the executive leadership and vision of Andrew Grove. The company's name was conceived as portmanteau of the words integrated and electronics, with co-founder Noyce having been a key inventor of the integrated circuit (microchip). The fact that "intel" is the term for intelligence information also made the name appropriate. Intel was an early developer of SRAM and DRAM memory chips, which represented the majority of its business until 1981. Although Intel created the world's first commercial microprocessor chip in 1971, it was not until the success of the personal computer (PC) that this became its primary business. During the 1990s, Intel invested heavily in new microprocessor designs fostering the rapid growth of the computer industry. During this period Intel became the dominant supplier of microprocessors for PCs and was known for aggressive and anti-competitive tactics in defense of its market position, particularly against Advanced Micro Devices (AMD), as well as a struggle with Microsoft for control over the direction of the PC industry.</p>

            </div>
          <hr>


<?php include('includes/sidebarFoot.php');?>
<?php include('includes/footer.php');?>
