import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import FollowingUser from './FollowingUser'

export default class FollowingUsers extends Component{
    constructor(){
        super();
        this.state = {
            followings: [],
        }

        this.getFollowings = this.getFollowings.bind(this);
    }

    componentDidMount(){
        this.getFollowings();
    }

    getFollowings(){
        axios
            .get('/api/myfollowings')
            .then((res) => {
                this.setState({
                    followings: res.data
                });
            })
            .catch(error => {
                console.log(error);
            });
    }

    render() {
        return this.state.followings.map(following => {
            return(
                <FollowingUser key={following.id} following={following}/>
            );
        });
    }
};
