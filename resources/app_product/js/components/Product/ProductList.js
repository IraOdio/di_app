import React, {Component} from 'react';
import {connect} from 'react-redux';
import {addProduct} from "../../store/actions";
import ProductItem from "./ProductItem";
import './index.css';

class ProductList extends Component {
    constructor(props) {
        super(props);
        this.addProduct_class_method = this.addProduct_class_method.bind(this);
    }
    renderProductList(){
        let list = this.props.list ?? [];
        return list.map((item, i) => {
            return (<ProductItem params={item} key={i}> </ProductItem>)
        });
    }
    addProduct_class_method(){
        console.log('t',this.props)
        this.props.addProduct_props();
    }

    filterProductListWithPrice(input){
        let value = input.target.value;
        if (false){
            // TODO: Код если в value не число
            return false;
        }
        
    }

    render() {
        return (
            <div>
                ProductList
                <hr/>
                Фильтры:
                <div>
                    <div>
                        <input onChange={this.filterProductListWithPrice} id={'price'} name={'price'} type="text"/>
                        <label htmlFor="{'price'}">Цена</label>
                    </div>
                </div>
                <hr/>
                <div className={'product-list-container'}>
                    {this.renderProductList()}
                </div>
                {/*<button onClick={this.addProduct_class_method}>add product</button>*/}
            </div>
        );
    }
}
let mapStateToProps = (state) => {
    let {products} = state;
    return products;
}
let mapDispatchToProps = (dispatch) => {
    return {
        addProduct_props: () => dispatch(addProduct())
    };
}
export default connect(mapStateToProps, mapDispatchToProps)(ProductList);

