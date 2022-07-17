import {combineReducers} from 'redux'

let products = (state = [], action) => {
    console.log('products reducer', state, action)

    switch (action.type) {
        case 'ADD_PRODUCT': {
            return {
                ...state,
                list: state.list.concat([
                    {id:action.id,name:action.name}
                ])
            }
        }
        case 'TOGGLE_PRODUCT':
            return state.map(todo =>
                (todo.id === action.id)
                    ? {...todo, completed: !todo.completed}
                    : todo
            )
        default:
            return state
    }
}

let reducer1 = (state = [], action) => {
    if (action.type === "reducer1_type1") {
        return {
            id: 1,
            name: 'Product #2',
        }
    }
    return state;
}

export default combineReducers({
    products, reducer1
})
