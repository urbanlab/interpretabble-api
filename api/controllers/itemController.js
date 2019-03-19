'use strict';


var mongoose = require('mongoose'),
  Item = mongoose.model('Items');

exports.list_items = function(req, res) {
  Item.find({}, function(err, item) {
    if (err)
      res.send(err);
    res.json(item);
  });
};

exports.get_item_nodes = function(req, res) {

    Item.findOne({_id: req.params.itemId})
    .populate('children')
    .exec(function (err, item){
        if (err)
        res.send(err);
        res.json(item);
    });
    
  };

exports.create_item = function(req, res) {
  var new_item = new Item(req.body);
  new_item.save(function(err, item) {
    if (err)
      res.send(err);
    res.json(item);
  });
};


exports.read_item = function(req, res) {
  Item.findById(req.params.itemId, function(err, item) {
    if (err)
      res.send(err);
    res.json(item);
  });
};


exports.update_item = function(req, res) {
  Item.findOneAndUpdate({_id: req.params.itemId}, req.body, {new: true}, function(err, item) {
    if (err)
      res.send(err);
    res.json(item);
  });
};


exports.delete_item = function(req, res) {


  Item.remove({
    _id: req.params.itemId
  }, function(err, item) {
    if (err)
      res.send(err);
    res.json({ message: 'Item '+ item._id +' successfully deleted' });
  });
};


