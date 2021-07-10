manually Ajax and jqery Form:
<form id="enquiry">
<h3>Send Email about <?= the_title()?></h3>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" placeholder="first name" class="form-control" required>
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" placeholder="last name" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Email address" class="form-control" required>
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>

<script>

    jQuery('#enquiry').submit(function(){
    alert('hi');
    })

//jquery not work i add cdn in footer but not work



</script>