import editorConfig from './../../assets/editor.json'

wp.domReady(() => {
  /** Handle block blacklist */
  editorConfig.unregisterBlocks.forEach(block => {
    wp.blocks.unregisterBlockType(block)
  })

  /** Unregister styles */
  for (let key in editorConfig.unregisterBlockStyles) {
    console.log(editorConfig.unregisterBlockStyles[key])
    wp.blocks.unregisterBlockStyle(key, editorConfig.unregisterBlockStyles[key])
  }

  /** Register styles */
  for (let key in editorConfig.registerBlockStyles) {
    console.log(editorConfig.registerBlockStyles[key])
    wp.blocks.registerBlockStyle(key, editorConfig.registerBlockStyles[key])
  }
})

jQuery(document).ready(function(){
  jQuery("html").css("font-size", "62.5%");
  setInterval(function(){ jQuery(".aos-init").addClass("aos-animate") }, 1000);
});
