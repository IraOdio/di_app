import {makeAutoObservable, observable, action} from 'mobx';

class DeveloperStore{
    developers = [{id:0,name:'Developer #1', time: 10}]
    constructor() {
        makeAutoObservable(this,{
            developers: observable
        })
    }
}

export default DeveloperStore;
