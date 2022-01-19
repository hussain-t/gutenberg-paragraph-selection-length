// JavaScript filter for overriding the number of paragraphs selected as a whole.
wp.hooks.addFilter(
  'editor.paragraph.selectionLength',
  'gutenberg-paragraph-selection/js/selectionLength',
  filerEditorParagraphSelectionLength
);

/**
 * This function allows to override the paragraph selection count in Gutenberg.
 * This is so that we can select specifically the number of paragraphs that can
 * be selected letter by letter instead of the whole paragraph being selected.
 *
 * @since    1.0.0
 */
function filerEditorParagraphSelectionLength() {
  return 20;
}
