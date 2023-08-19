<div class="col-sm-6 col-md-6">
    <div class="mb-2">
        <label class="form-label required">Purpose of visit</label>
        <select class="form-select" name="purpose" required>
		    <option value="" disabled selected>Select Purpose of visit...</option>
			<option value="Complain">Complain</option>
			<option value="Interview">Interview</option>
			<option value="Meeting">Meeting</option>
			<option value="Personal">Personal</option>
			<option value="Repair">Repair</option>
			<option value="Other">Other</option>
        </select>
    </div>
    </div>
    
	<div class="col-sm-6 col-md-6">
        <div class="mb-2">
            <label class="form-label required">Whom to see</label>
			<select class="form-select" name="seeing" required>
                <option value="" disabled selected>Select whom to see...</option>
                <optgroup label="Registrar">
                    <option>Prof. ABC</option>
                </optgroup>
                <optgroup label="Commandant">
                    <option>Maj. Gen XYZ</option>
                </optgroup>
			<select>
		</div>
    </div>
                              
    <div class="col-md-12">
	    <div class="mb-2 mb-0">
	        <label class="form-label required">Reason</label>
            <textarea class="form-control" name="reason" placeholder="Reason..." spellcheck="true" required></textarea>
		</div>
	</div>