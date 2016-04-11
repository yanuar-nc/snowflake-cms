<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

use Cake\ORM\TableRegistry;
use Cake\ORM\RulesChecker;

use Cake\Network\Exception\NotFoundException;

class RepositoryComponent extends Component
{
	
	public $components = [ 'Paginator', 'Session' ];


    public function index( $className, $sort, $direction )
    {
        $model = ClassRegistry::init( $className );

        $options = $model->getIndexConditions( $sort, $direction );
        
        $this->Paginator->settings = $options;
        $datas = $this->Paginator->paginate( $className );

        if ( $direction == null ) $direction = 'DESC'; 
        else $direction = 'ASC';

        $this->Controller->set( compact( 'datas', 'direction' ) );         
    }
	public function search( $className, $sort, $direction )
	{
        $keyword = $_GET[ 'keyword' ];
        $model   = ClassRegistry::init( $className );
        $options = $model->getSearchConditions( $sort, $direction, $keyword );

        $this->Paginator->settings = $options;
        $datas = $this->Paginator->paginate( $this->model_name );

        if ( $direction == null ) $direction = 'DESC'; 
        else $direction = 'ASC';

        $this->Controller->request->data[ 'Search' ][ 'keyword' ] = $keyword;

        $this->Controller->set( compact( 'datas', 'direction' ) );   
        $this->Controller->render( 'index' );
	}

	public function checkId( $className, $id )
	{
		$model = TableRegistry::get( $className );
        if( !$id )
        {
            throw new NotFoundException( __( MSG_DATA_NOT_FOUND ) );
        }
        
        $model->get( $id );

        return true;
	}

	public function insert( $className, $datas, $options = [] )
	{
		$model = ClassRegistry::init( $className );
        $model->create();

        $redirect = isset( $options[ 'redirect' ] ) ? $options[ 'redirect' ] : 'index';
        if( $model->save( $datas ) )
        {
            $this->Session->setFlash( __( MSG_DATA_SAVE_SUCCESS ), 'Bootstrap/flash-success' );
            return $this->Controller->redirect( [ 'action' => $redirect ] );
        }
        else
        {
            $this->Session->setFLash( __( MSG_DATA_SAVE_FAILED ), 'Bootstrap/flash-error' );
        }		
	}

    public function update( $className, $datas, $conditions )
    {
        $model = $this->checkId( $className, $conditions[ $className . '.id' ] );
        $model->create();

        $redirect = isset( $options[ 'redirect' ] ) ? $options[ 'redirect' ] : 'index';
        if( $model->updateAll( $datas, $conditions ) )
        {
            $this->Session->setFlash( __( MSG_DATA_SAVE_SUCCESS ), 'Bootstrap/flash-success' );
            return $this->Controller->redirect( [ 'action' => $redirect ] );
        }
        else
        {
            $this->Session->setFLash( __( MSG_DATA_SAVE_FAILED ), 'Bootstrap/flash-error' );
        }       

    }

    public function delete( $className, $id )
    {
        $model = $this->checkId( $className, $id );

        if( $model->delete() )
        {
            $this->Session->setFlash( __( MSG_DATA_DELETE_SUCCESS ), 'Bootstrap/flash-success' );
            return $this->Controller->redirect( array( 'action' => ACTION_INDEX ) );
        }
        
        $this->Session->setFlash( __( MSG_DATA_DELETE_FAILED ), 'Bootstrap/flash-error' );
        return $this->Controller->redirect( array( 'action' => ACTION_INDEX ) );        
    }

    public function view( $className, $id )
    {
        $model = $this->checkId( $className, $id );
        $this->Controller->set( 'data', $model->read( null, $id ) );
    }
}