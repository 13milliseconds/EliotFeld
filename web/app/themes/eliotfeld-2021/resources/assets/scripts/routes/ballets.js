import 'tablesorter'
import 'tablesorter/dist/js/jquery.tablesorter.widgets'
import 'tablesorter/dist/js/widgets/widget-reflow.min'

export default {
  init() {
    // JavaScript to be fired on the about us page
    $('#balletsTable').tablesorter({
      sortLocaleCompare: true,
      sortStable: true,
    });
  },
};
