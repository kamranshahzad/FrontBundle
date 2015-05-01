<?php

namespace Cogilent\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Doctrine\Common\Util\ClassUtils;

//use Cogilent\BaseBundle\Utils\EmailUtils;

use Cogilent\UserBundle\Entity\Role;



/**
 * Front controller
 *
*/
class FrontController extends Controller{


    /**
     * @Route("/", name="front_index")
     * @Template()
     */
    public function indexAction(Request $request){



        $em = $this->getDoctrine()->getManager();
        $aclProvider = $this->get('security.acl.provider');
        $securityContext = $this->get('security.context');


        $classIdentity = new ObjectIdentity('class', ClassUtils::getRealClass( 'Cogilent\\UserBundle\\Entity\\Office') );


        if (true === $securityContext->isGranted('VIEW', $classIdentity)) {
            //echo('<h1> -------------------> end result</h1>');
            //throw new AccessDeniedException();
        }


        /*
        $builder = new MaskBuilder();
        $builder
            //->add('view')
            ->add('edit')
            ->add('delete')
            //->add('undelete')
        ;
        $mask = $builder->get();
        */

        //$securityIdentity = new RoleSecurityIdentity('ROLE_USER');

        //$securityIdentities = array();
        //$securityIdentities[] = new RoleSecurityIdentity('ROLE_USER');

        //$objectIdentity = new ObjectIdentity('class', 'Cogilent\\UserBundle\\Entity\\Office' );
        //$acl = $aclProvider->findAcl($objectIdentity, $securityIdentities);

        //$acl = $aclProvider->createAcl($objectIdentity);
        //$acl->insertClassAce($securityIdentity, $mask );

        /*
        foreach ($securityIdentities as $securityIdentity) {
            $acl->insertClassAce($securityIdentity, $mask);
        }

        $aclProvider->updateAcl($acl);

        echo "<h1>--------------> Done ....</h1>";
        */



        //$user = $this->get('security.context')->getToken()->getUser();

        //print_r($user->getRoles());



        //$roleRepo = $em->getRepository('CogilentUserBundle:Role')->findOneByName('ROLE_ADMIN');


        /*

        $oid = new ObjectIdentity('class', 'Cogilent\\UserBundle\\Entity\\Office' );
        $acl = $aclProvider->createAcl($oid);
        */

        //$securityIdentity = new RoleSecurityIdentity('ROLE_ADMIN');
        //$securityContext = $this->get('security.context');
        //$user = $securityContext->getToken()->getUser();
        //$securityIdentity = UserSecurityIdentity::fromAccount($user);


        // grant owner access
        //$acl->insertClassAce($securityIdentity, MaskBuilder::MASK_OWNER );
        //$aclProvider->updateAcl($acl);


        //



        //$secIdentity = new RoleSecurityIdentity(new Role('ROLE_USER'));



        //

        /*
        $securityContext = $this->get('security.context');
        $objectIdentity = new ObjectIdentity('class', 'Cogilent\\UserBundle\\Entity\\Office' );
        if(true === $securityContext->isGranted('EDIT', $objectIdentity)) {
            echo("<h1>You have access to edit this content");
        }
        */



        /*
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();
        $securityIdentity = UserSecurityIdentity::fromAccount($user);

        $objectIdentity = new ObjectIdentity('class', 'Cogilent\\UserBundle\\Entity\\Office' );
        $acl = $aclProvider->findAcl($objectIdentity, $securityIdentity);
        */





        /*
        $aclProvider = $this->get('security.acl.provider');
        $acl = $aclProvider->findAcl($objectIdentity, $securityIdentities);
        $securityIdentities = array();
        */


        //
        //ROLE_USER



        //

        /*
        $classIdentity = new ObjectIdentity('class', ClassUtils::getRealClass( 'Cogilent\\UserBundle\\Entity\\Office') );
        $securityContext = $this->get('security.context');

        if (true === $securityContext->isGranted('EDIT', $classIdentity)) {
            echo('<h1> -------------------> end result</h1>');
            //throw new AccessDeniedException();
        }
        */



        //$user = $this->get('security.context')->getToken()->getUser();


        //$office = new \Cogilent\UserBundle\Entity\Office();

        /*
        $aclProvider = $this->get('security.acl.provider');

        $classIdentity = new ObjectIdentity('class', ClassUtils::getRealClass( 'Cogilent\\UserBundle\\Entity\\Office') );
        $acl = $aclProvider->createAcl($classIdentity);
        //$aclProvider->deleteAcl($classIdentity);

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();
        $securityIdentity = UserSecurityIdentity::fromAccount($user);

        $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
        $aclProvider->updateAcl($acl);

        $securityContext = $this->get('security.context');

        if (false === $securityContext->isGranted('EDIT', $classIdentity)) {
            throw new AccessDeniedException();
        }
        */

        /*
        $classIdentity = new ObjectIdentity('class', ClassUtils::getRealClass( 'Cogilent\\UserBundle\\Entity\\Office') );

        $securityContext = $this->get('security.context');
        if (false === $securityContext->isGranted( 'EDIT' , $classIdentity)) {
            echo "<h2> ------> Yes you have writes</h2>h2>";
        }
        */


        //echo "<h1> CLASS ACLLL </h1>>";

        //$objectIdentity = ObjectIdentity::fromDomainObject($location);
        //$acl = $aclProvider->createAcl($objectIdentity);






        return array('result'=>'');


        /*
        $testEmail = 'm_kamranshahzad@hotmail.com';
        $myemail   = 'kamran@cogilent.com';
        $response = EmailUtils::verifyEmail($testEmail,$myemail, true);
        if(is_array($response)){
            echo('<pre>');
            print_r($response);
            echo('</pre>');
        }
        echo($response);
        */


        //echo 'Email:'.$user->getEmail();
        //echo "index";
        //print_r($user->getRoles());

        /*foreach($user->getRoles() as $role){
            echo $role->getName().'</br>';
        }*/
    }




}//@
