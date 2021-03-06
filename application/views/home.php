<!DOCTYPE html>
<?=$head?>
<section id="contact" style="padding: 150px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="mainSearchForm" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="regions" name="region" onchange="setSubRegionsDropDown()">
                                    <?php foreach ($regions as $key => $value) {?>
                                    <option data-areas='<?=$value['areas']?>'><?= $value['region'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="query" placeholder="Search Query">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="categories" name="category" onchange="setSubcategoriesDropDown()">

                                    <option value="any" selected="true" style="display: none;" data-subcategories='<?=json_encode([])?>'>Select Category</option>
                                    <?php foreach ($subCategory as $key => $value) {?>    
                                    <option data-subcategories='<?=json_encode($value)?>'><?=$key?></option>
                                    <?php } ?>
                                    <option value="any" data-subcategories='<?=json_encode(['any'])?>'>Any</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="subcategories" name="subcategory">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="subRegions" name="subregion"></select>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-5">
                            <div class="form-group">
                                <button type="submit" class="btn btn-xl" style="width: 100%;">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <h3 style="color:#C80237">BEAUTY AND GROOMING</h3>
        <?php if (count($deals['Beauty and Grooming']) > 0){
            $i = 0;
            foreach ($deals['Beauty and Grooming'] as $key => $value) {
            if($i == 4){
                break;
            }
            $i++;
            ?>
        <div class="col-lg-3">
            <div class="dealBox">
                <div class="heading">
                    <h2><?php echo $value['brand']; ?></h2>
                </div>
                <div class="body">
                    <div class="img">
                        <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                    </div>
                    <div class="details">
                        <div class="detailHead">
                            <p><strong><?php echo $value['title']; ?></strong></p>
                        </div>
                        <div class="detailBody">
                            <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                            <p><strong>Offer Ends on:</strong> <span><?php if ($value['active']==1){ ?><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?><?php } else { echo "Offer Expired";} ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="viewButton">
                    <a href="/deal/<?php echo preg_replace('/[\s%&]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                </div>
            </div>
        </div>
        <?php }
        if(count($deals['Beauty and Grooming'])>4)
            echo '<a style="float: right;" href="/category/Beauty and Grooming">View All</a>';
        }else{ ?>
            <h2 class="text-center">No Result</h2>
        <?php } ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <h3 style="color:#C80237">FITNESS AND SPORTS</h3>
        <?php if (count($deals['Fitness and Sports']) > 0){
            $i = 0;
            foreach ($deals['Fitness and Sports'] as $key => $value) {
            if($i == 4){
                break;
            }
            $i++;
            ?>
        <div class="col-lg-3">
            <div class="dealBox">
                <div class="heading">
                    <h2><?php echo $value['brand']; ?></h2>
                </div>
                <div class="body">
                    <div class="img">
                        <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                    </div>
                    <div class="details">
                        <div class="detailHead">
                            <p><strong><?php echo $value['title']; ?></strong></p>
                        </div>
                        <div class="detailBody">
                            <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                           <p><strong>Offer Ends on:</strong> <span><?php if ($value['active']==1){ ?><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?><?php } else { echo "Offer Expired";} ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="viewButton">
                    <a href="/deal/<?php echo preg_replace('/[\s%&]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                </div>
            </div>
        </div>
        <?php }
        if(count($deals['Fitness and Sports'])>4)
            echo '<a style="float: right;" href="/category/Fitness and Sports">View All</a>';
        }else{ ?>
            <h2 class="text-center">No Result</h2>
        <?php } ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <h3 style="color:#C80237">APPARELS</h3>
        <?php if (count($deals['Apparels']) > 0){
            $i = 0;
            foreach ($deals['Apparels'] as $key => $value) {
            if($i == 4){
                break;
            }
            $i++;
            ?>
        <div class="col-lg-3">
            <div class="dealBox">
                <div class="heading">
                    <h2><?php echo $value['brand']; ?></h2>
                </div>
                <div class="body">
                    <div class="img">
                        <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                    </div>
                    <div class="details">
                        <div class="detailHead">
                            <p><strong><?php echo $value['title']; ?></strong></p>
                        </div>
                        <div class="detailBody">
                            <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                            <p><strong>Offer Ends on:</strong> <span><?php if ($value['active']==1){ ?><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?><?php } else { echo "Offer Expired";} ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="viewButton">
                    <a href="/deal/<?php echo preg_replace('/[\s%&]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                </div>
            </div>
        </div>
        <?php }
        if(count($deals['Apparels'])>4)
            echo '<a style="float: right;" href="/category/Apparels">View All</a>';
        }else{ ?>
            <h2 class="text-center">No Result</h2>
        <?php } ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <h3 style="color:#C80237">MISCELLANEOUS</h3>
        <?php if (count($deals['Miscellaneous']) > 0){
            $i = 0;
            foreach ($deals['Miscellaneous'] as $key => $value) {
            if($i == 4){
                break;
            }
            $i++;
            ?>
        <div class="col-lg-3">
            <div class="dealBox">
                <div class="heading">
                    <h2><?php echo $value['brand']; ?></h2>
                </div>
                <div class="body">
                    <div class="img">
                        <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                    </div>
                    <div class="details">
                        <div class="detailHead">
                            <p><strong><?php echo $value['title']; ?></strong></p>
                        </div>
                        <div class="detailBody">
                            <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                         <p><strong>Offer Ends on:</strong> <span><?php if ($value['active']==1){ ?><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?><?php } else { echo "Offer Expired";} ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="viewButton">
                    <a href="/deal/<?php echo preg_replace('/[\s%&]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                </div>
            </div>
        <?php }
        if(count($deals['Miscellaneous'])>4)
            echo '<a style="float: right;" href="/category/Miscellaneous">View All</a>';
        }else{ ?>
            <h2 class="text-center">No Result</h2>
        <?php } ?>
    </div>   
</div> 
</div>           
<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<script src="/assets/js/agency.js"></script>
<script>
    $(document).ready(function(){
        setSubRegionsDropDown();
        setSubcategoriesDropDown();
    });
    function setSubRegionsDropDown () {
        var subRegions = $.parseJSON($('#regions option:selected').attr('data-areas'));
        var subRegionsHtml = '<option value="any" style="display:none">Select Area</option>';
        $.each(subRegions, function(index,value){
            subRegionsHtml += '<option>'+value+'</option>';
        });
        subRegionsHtml +='<option value="any">Any</option>';
        $('#subRegions').html(subRegionsHtml);
    }
    function setSubcategoriesDropDown () {
        var subcategories = $.parseJSON($('#categories option:selected').attr('data-subcategories'));
        var subcategoriesHtml = '';
        $.each(subcategories, function(index,value){
            subcategoriesHtml += '<option>'+value+'</option>';
        });
        if(subcategories[0] == 'any'){    
            subcategoriesHtml = '<option value="any">Any</option>';
        }else{
            subcategoriesHtml += '<option value="any">Any</option>';
        }
        if(subcategories.length == 0){
            subcategoriesHtml = '<option value="any" selected="true" style="display: none;">Select Subcategory</option>';
        }
        $('#subcategories').html(subcategoriesHtml);
    }      
</script>
<script src="/assets/js/custom.js"></script>
</body>
</html>