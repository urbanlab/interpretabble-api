'use strict';
module.exports = function(app) {
  var item = require('../controllers/itemController');

  // todoList Routes
  app.route('/items')
    .get(item.list_items)
    .post(item.create_item);

app.route('/items/:itemId/getNodes')
    .get(item.get_item_nodes);

  app.route('/items/:itemId')
    .get(item.read_item)
    .put(item.update_item)
    .delete(item.delete_item);
};