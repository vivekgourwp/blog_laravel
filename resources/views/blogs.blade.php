<div class="form-group">
    <div class="options-data">
        <label class="form-label">Type of Nurse?</label>
        <div class="selectBox" onclick="showCheckboxes()">
            <select id="mainSelect">
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label for="option1">
                <input id="option1" type="checkbox" />Entry level nursing 
            </label>
            <label for="option2">
                <input id="option2" type="checkbox" />Registered Nurses (RNs) 
            </label>
            <label for="option3">
                <input id="option3" type="checkbox" />Advanced Practice Registered Nurses (APRNs) 
            </label>
        </div>
    </div>
</div>

<div id="entry-level-nursing" class="form-group d-none">
    <div class="options-data">
        <label class="form-label">Entry Level Nursing</label>
        <div class="selectBox" onclick="showCheckboxes2()">
            <select id="entryLevelSelect">
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes-options">
            <label for="eln">
                <input type="checkbox" id="eln" />First Item 
            </label>
        </div>
    </div>
</div>

<div id="registered-nurses" class="form-group d-none">
    <div class="options-data">
        <label class="form-label">Registered Nurses (RNs)</label>
        <div class="selectBox" onclick="showCheckboxes()">
            <select id="registeredNursesSelect">
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes-options">
            <label for="rn">
                <input type="checkbox" id="rn" />Second Item 
            </label>
        </div>
    </div>
</div>

<div id="advanced-practice" class="form-group d-none">
    <div class="options-data">
        <label class="form-label">Advanced Practice Registered Nurses (APRNs)</label>
        <div class="selectBox" onclick="showCheckboxes()">
            <select id="advancedPracticeSelect">
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes-options">
            <label for="aprn">
                <input type="checkbox" id="aprn" />Third Item 
            </label>
        </div>
    </div>
</div>

<script>
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

// Hide the first select option when the second one is chosen
document.getElementById("entryLevelSelect").addEventListener("change", function() {
    document.getElementById("mainSelect").style.display = "none";
});

document.getElementById("registeredNursesSelect").addEventListener("change", function() {
    document.getElementById("mainSelect").style.display = "none";
});

document.getElementById("advancedPracticeSelect").addEventListener("change", function() {
    document.getElementById("mainSelect").style.display = "none";
});
</script>
