<p class="h6 wtf">Your Brand Colours</p>
<p>Insert your hex colour, and see how the theme changes!</p>
<form id="formBrandColour" class="wtf-colour-form">
  <!--
  <div class="colour-preview">
    <div class="preview-swatch">
      <span id="wtfPreviewPrimary"></span>
      <span id="wtfPreviewSecondary"></span>
    </div>
    <div class="preview-values">
      <small id="wtfPrimaryRgb"></small>
      <small id="wtfSecondaryRgb"></small>
    </div>
  </div>-->

  <div class="colour-group">
    <label>Primary Colour</label>
    <div class="colour-input-wrapper">
      <input type="color" id="wtfPrimaryColour" value="#000000">
      <input type="text" id="wtfPrimaryHex" placeholder="#000000">
    </div>
  </div>

  <div class="colour-group">
    <label>Secondary Colour</label>
    <div class="colour-input-wrapper">
      <input type="color" id="wtfSecondaryColour" value="#FFFFFF">
      <input type="text" id="wtfSecondaryHex" placeholder="#FFFFFF">
    </div>
  </div>

  <div class="colour-actions">
    <button id="wtfColourReset" class="btn btn-secondary">Reset</button>
  </div>

</form>