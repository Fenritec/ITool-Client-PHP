<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1FamilleClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1FamilleClient();
            if (\array_key_exists('TauxRemise', $data) && \is_int($data['TauxRemise'])) {
                $data['TauxRemise'] = (double) $data['TauxRemise'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (\array_key_exists('TfaId', $data)) {
                $object->setTfaId($data['TfaId']);
                unset($data['TfaId']);
            }
            if (\array_key_exists('Designation', $data)) {
                $object->setDesignation($data['Designation']);
                unset($data['Designation']);
            }
            if (\array_key_exists('TauxRemise', $data)) {
                $object->setTauxRemise($data['TauxRemise']);
                unset($data['TauxRemise']);
            }
            if (\array_key_exists('NrClient', $data)) {
                $object->setNrClient($data['NrClient']);
                unset($data['NrClient']);
            }
            if (\array_key_exists('FamilleVarianteClients', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['FamilleVarianteClients'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setFamilleVarianteClients($values);
                unset($data['FamilleVarianteClients']);
            }
            if (\array_key_exists('Compte', $data)) {
                $object->setCompte($data['Compte']);
                unset($data['Compte']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['TfaId'] = $object->getTfaId();
            $data['Designation'] = $object->getDesignation();
            $data['TauxRemise'] = $object->getTauxRemise();
            $data['NrClient'] = $object->getNrClient();
            $values = [];
            foreach ($object->getFamilleVarianteClients() as $key => $value) {
                $values[$key] = $value;
            }
            $data['FamilleVarianteClients'] = $values;
            $data['Compte'] = $object->getCompte();
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => false];
        }
    }
} else {
    class V1FamilleClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1FamilleClient();
            if (\array_key_exists('TauxRemise', $data) && \is_int($data['TauxRemise'])) {
                $data['TauxRemise'] = (double) $data['TauxRemise'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            if (\array_key_exists('TfaId', $data)) {
                $object->setTfaId($data['TfaId']);
                unset($data['TfaId']);
            }
            if (\array_key_exists('Designation', $data)) {
                $object->setDesignation($data['Designation']);
                unset($data['Designation']);
            }
            if (\array_key_exists('TauxRemise', $data)) {
                $object->setTauxRemise($data['TauxRemise']);
                unset($data['TauxRemise']);
            }
            if (\array_key_exists('NrClient', $data)) {
                $object->setNrClient($data['NrClient']);
                unset($data['NrClient']);
            }
            if (\array_key_exists('FamilleVarianteClients', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['FamilleVarianteClients'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setFamilleVarianteClients($values);
                unset($data['FamilleVarianteClients']);
            }
            if (\array_key_exists('Compte', $data)) {
                $object->setCompte($data['Compte']);
                unset($data['Compte']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['TfaId'] = $object->getTfaId();
            $data['Designation'] = $object->getDesignation();
            $data['TauxRemise'] = $object->getTauxRemise();
            $data['NrClient'] = $object->getNrClient();
            $values = [];
            foreach ($object->getFamilleVarianteClients() as $key => $value) {
                $values[$key] = $value;
            }
            $data['FamilleVarianteClients'] = $values;
            $data['Compte'] = $object->getCompte();
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => false];
        }
    }
}