import React, {Component} from 'react';

class ProductItem extends Component {

    constructor(props) {
        super(props);
    }
    getNameProduct(){
        // TODO: Maybe manipulation for getter name
        return this.props.params.name;
    }
    getPriceProduct(){
        // TODO: Maybe manipulation for getter price
        return this.props.params.price;
    }
    render() {
        return (
            <div className={'product-item'}>
                Название: {this.getNameProduct()}, цена: {this.getPriceProduct()}
            </div>
        );
    }
}

export default ProductItem;
