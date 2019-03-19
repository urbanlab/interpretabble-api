'use strict';
var mongoose = require('mongoose');
var Schema = mongoose.Schema;


var ItemSchema = new Schema({
  name: {
    type: String,
    required: 'Your item name'
  },
  Created_date: {
    type: Date,
    default: Date.now
  },
  /*id_parent: {
      type: String
  },*/
  children: {
      type: [{type: Schema.Types.ObjectId, ref:  'Items'}]
  },
  media: {
      type: String
  }
});

module.exports = mongoose.model('Items', ItemSchema);